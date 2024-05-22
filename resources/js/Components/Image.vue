<template>
    <div id="app">
        <file-pond
            name="files"
            ref="pond"
            class-name="my-pond"
            label-idle="Arraste e solte ou clique aqui para selecionar imagens..."
            allow-multiple="true"
            accepted-file-types="image/jpeg, image/png"
            v-bind:files="myFiles"
            v-on:init="handleFilePondInit"
            v-on:updatefiles="updateFilePondFiles"
        />
    </div>
</template>

<script>
// Import FilePond
import vueFilePond from 'vue-filepond';

// Import plugins
import FilePondPluginFileValidateType from 'filepond-plugin-file-validate-type/dist/filepond-plugin-file-validate-type.esm.js';
import FilePondPluginImagePreview from 'filepond-plugin-image-preview/dist/filepond-plugin-image-preview.esm.js';

// Import styles
import 'filepond/dist/filepond.min.css';
import 'filepond-plugin-image-preview/dist/filepond-plugin-image-preview.min.css';

// Create FilePond component
const FilePond = vueFilePond(FilePondPluginFileValidateType, FilePondPluginImagePreview);

export default {
    name: 'app',
    data: function () {
        return { myFiles: [] };
    },
    methods: {
        handleFilePondInit() {
            console.log('FilePond has initialized');
        },
        updateFilePondFiles(fileItems) {
            const files = fileItems.map(fileItem => fileItem.file);
            this.$emit('files-updated', files);
        }
    },
    components: {
        FilePond,
    },
};
</script>
