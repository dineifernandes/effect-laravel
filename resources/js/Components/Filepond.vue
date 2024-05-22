<template>
    <file-pond
        class="mt-1"
        :name="`file[${collection}]`"
        label-idle="Arraste seus arquivos aqui"
        ref="filepond"
        :dropOnPage="true"
        :allowMultiple="multiple"
        :allowImageEdit="true"
        :credits="false"
        :files="fileModel"
        :server="{ process }"
        :imageEditor="editorConfig"
        :instant-upload="false"
        :imageEditorSupportImage="isEditable"
        image-crop-aspect-ratio="1"
        :accepted-file-types="accept"
        @removefile="removeFile"
    />
</template>

<script>
// Import Vue FilePond
import vueFilePond from 'vue-filepond';
import {
    createDefaultImageReader,
    createDefaultImageWriter,
    getEditorDefaults,
    openEditor,
    plugin_annotate,
    plugin_crop,
    plugin_filter,
    plugin_finetune,
    processImage,
    setPlugins,
} from "@/plugins/pintura/pintura.js";

import {pt_br_locale} from "@/plugins/pintura-locales/locale_pt_br.js"

import '@/plugins/pintura/pintura.css';
import "filepond/dist/filepond.min.css";
import "filepond-plugin-image-preview/dist/filepond-plugin-image-preview.min.css";
import 'filepond-plugin-file-poster/dist/filepond-plugin-file-poster.css';
import 'filepond-plugin-image-edit/dist/filepond-plugin-image-edit.css';
import FilePondPluginImageEditor from "@/plugins/filepond-plugin-image-editor";
import FilePondPluginFileValidateType from "filepond-plugin-file-validate-type";
import FilePondPluginFilePoster from 'filepond-plugin-file-poster';

setPlugins(plugin_crop, plugin_finetune, plugin_filter, plugin_annotate);

const FilePond = vueFilePond(
    FilePondPluginImageEditor,
    FilePondPluginFileValidateType,
    FilePondPluginFilePoster,
);

const editorConfig = {
    // used to create the editor, receives editor configuration, should return an editor instance
    createEditor: openEditor,

    // Required, used for reading the image data
    imageReader: [createDefaultImageReader],

    // optionally. can leave out when not generating a preview thumbnail and/or output image
    imageWriter: [createDefaultImageWriter],

    // used to generate poster images, runs an editor in the background
    imageProcessor: processImage,

    // editor options
    editorOptions: getEditorDefaults({
        locale: {
            ...pt_br_locale,
        }
    }),
};

export default {
    props: ['modelValue', 'multiple', 'collection', 'accept','editor'],
    data: function () {
        return {
            fileModel: this.$props.modelValue,
            multiple: this.$props.multiple ?? false,
            editorConfig:  this.$props.editor ?? editorConfig,
            collection: this.$props.collection ?? 'default',
            accept: this.$props.accept ?? 'image/*',
        };
    },
    methods: {
        async process(fieldName, file, metadata, load, error, progress, abort) {

            const controller = new AbortController();
            const formData = new FormData();

            formData.append(fieldName, file, file.name);

            try {
                const res = await axios.post(route('dashboard.upload.store'),
                    formData, {
                        headers: {'X-Requested-With': 'XMLHttpRequest'},
                        signal: controller.signal,
                    });

                const $media = this.modelValue;
                $media.push(res.data);

                this.$emit('update:modelValue', $media);

                load(res.data);
            } catch (e) {
                console.error(e);
            }

            return {
                abort: () => {
                    controller.abort();
                    abort();
                }
            };
        },
        removeFile() {
            const files = this.$refs.filepond.getFiles();

            const $media = this.modelValue
                .filter((media) => {
                    return files.some((file) => file.source === media.source);
                });

            console.log('resultado', $media);

            this.$emit('update:modelValue', $media);
        },
        isEditable: (file) => {
            const invalid = ['image/svg', 'image/svg+xml'];

            if (invalid.includes(file.type)) {
                return false;
            }

            return 'lastModified' in file;
        },
    },
    components: {
        FilePond,
    },
};
</script>
