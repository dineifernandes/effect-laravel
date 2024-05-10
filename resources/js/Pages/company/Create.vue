<template>
    <Head :title="$props.title" />
    <AppLayout title="Empresa">
        <div class="card">
            <div class="card-body">
                <h6 class="card-title mb-4">Preencha os campos abaixo:</h6>

                <!-- Exibir mensagem de sucesso -->


                <form class="row" method="post" @submit.prevent="submitForm">
                    <!-- Campo Nome -->
                    <div class="col-md-12 mb-3">
                        <label class="form-label">Nome</label>
                        <input v-model="form.nome" type="text" class="form-control" id="nome" name="nome">
                        <!-- Exibir erro -->
                        <div v-if="errors.nome" class="">{{ errors.nome }}</div>
                    </div>

                    <div class="col-md-12 mb-3">
                        <label class="form-label">Razão Social</label>
                        <input v-model="form.razao_social" type="text" class="form-control" id="razao_social" name="razao_social">
                        <!-- Exibir erro -->
                        <div v-if="errors.razao_social" class="">{{ errors.razao_social }}</div>
                    </div>


                    <div class="col-md-12 mb-3">
                        <label class="form-label">Logo</label>
                        <input type="file" @change="onFileChange" class="form-control" id="logo" name="logo">
                        <!-- Exibir erro -->
                        <div v-if="errors.logo" class="">{{ errors.logo }}</div>
                    </div>

                    <div class="col-md-12 mb-3">
                        <label class="form-label">Slogan</label>
                        <input v-model="form.slogan" type="text" class="form-control" id="slogan" name="slogan">
                        <!-- Exibir erro -->
                        <div v-if="errors.slogan" class="">{{ errors.slogan }}</div>
                    </div>

                    <div class="col-md-12 mb-3">
                        <label class="form-label">História</label>
                        <textarea v-model="form.historia" rows="5" class="form-control" id="historia" name="historia"></textarea>
                        <!-- Exibir erro -->
                        <div v-if="errors.historia" class="">{{ errors.historia }}</div>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="form-label">Propósito</label>
                        <textarea v-model="form.proposito" rows="5" class="form-control" id="proposito" name="proposito"></textarea>
                        <!-- Exibir erro -->
                        <div v-if="errors.proposito" class="">{{ errors.proposito }}</div>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="form-label">Missão</label>
                        <textarea v-model="form.missao" rows="5" class="form-control" id="missao" name="missao"></textarea>
                        <!-- Exibir erro -->
                        <div v-if="errors.missao" class="">{{ errors.missao }}</div>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="form-label">Visão</label>
                        <textarea v-model="form.visao" rows="5" class="form-control" id="visao" name="visao"></textarea>
                        <!-- Exibir erro -->
                        <div v-if="errors.visao" class="">{{ errors.visao }}</div>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="form-label">Valores</label>
                        <textarea v-model="form.valores" rows="5" class="form-control" id="valores" name="valores"></textarea>
                        <!-- Exibir erro -->
                        <div v-if="errors.valores" class="">{{ errors.valores }}</div>
                    </div>

                    <div class="col-md-12 mb-3">
                        <label class="form-label">Link Vídeo Institucional</label>
                        <input v-model="form.video_institucional" type="text" class="form-control" id="video_institucional" name="video_institucional">
                        <!-- Exibir erro -->
                        <div v-if="errors.video_institucional" class="">{{ errors.video_institucional }}</div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <label for="">Fotos da Empresa</label>
                            <div id="drop-area" class="drop-area" @dragover.prevent="dragOver" @dragleave="dragLeave" @drop="dropFile">
                                <label for="fileInput"><p>Clique ou arraste e solte as imagens aqui</p></label>
                                <div ref="imagePreview"></div>
                            </div>
                            <input type="file" id="fileInput" name="fotos[]" multiple style="display: none;" accept="image/jpeg, image/png" @change="handleFileChange">
                        </div>
                    </div>

                    <!-- Campo Status -->
                    <div class="col-md-12 mb-3">
                        <label class="form-label">Status</label>
                        <div>
                            <div class="form-check form-check-inline">
                                <input type="radio" id="ativo" name="status" value="1" v-model="form.status" class="form-check-input" checked>
                                <label class="form-check-label" for="ativo">Ativo</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" id="inativo" name="status" value="0" v-model="form.status" class="form-check-input">
                                <label class="form-check-label" for="inativo">Inativo</label>
                            </div>
                        </div>
                        <!-- Exibir erro -->
                        <div v-if="errors.status" class="">{{ errors.status }}</div>
                    </div>

                    <div class="d-flex flex-fill justify-content-end">
                        <Link :href="route('company.index')" class="btn btn-outline-dark btn-icon me-2" data-bs-toggle="tooltip" title="Cancelar">
                            <i class="bi bi-arrow-left me-0"></i>  Voltar
                        </Link>

                        <button class="btn btn-primary me-2" type="submit"><i class="bi bi-plus"></i> Salvar</button>
                    </div>

                </form>

            </div>
        </div>
    </AppLayout>
</template>

<script>
import '../../../css/style_images_company.css';
import AppLayout from "../AppLayout.vue";
import { defineComponent } from "vue";
import {Head, Link, useForm} from "@inertiajs/vue3";
import Swal from 'sweetalert2'

import Notification from "@/Components/Notification.vue";

export default defineComponent({
    props:{
        errors: Object,
        title:{
            type: String,
            default: 'Empresa'
        }
    },
    components: {
        Head,
        AppLayout,
        Link,
        Notification
    },
    data() {

        const form = useForm({
            nome: '',
            razao_social: '',
            logo: '',
            slogan: '',
            historia: '',
            proposito: '',
            missao: '',
            visao: '',
            valores: '',
            video_institucional: '',
            status: '1',
        })

        return {
            form
        }
    },
    methods: {
        async submitForm(){
            // Execute a validação antes de enviar
            const isValid = this.validateForm(this.form);

            // Se o formulário for válido, faça a submissão
            if (isValid.trim().length <= 0) {

                try{
                    const response = await this.form.post(route('company.store'));

                    Toast.fire("","Operação realizada com sucesso!","success");

                    //this.form.reset();

                }catch(err){
                    Toast.fire("","Falha ao realizar a operação!","error");
                }


            } else {
                Toast.fire("",isValid,"error");

            }
        },
        validateForm(form) {
            // Verifique se os campos obrigatórios estão preenchidos e não são apenas espaços em branco
            const requiredFields = ['nome', 'status'];
            let erros = "";

            if(!form['nome'] || form['nome'].trim() === ''){
                erros += "O campo nome é obrigatório!<br>";
            }
            if(!form['razao_social'] || form['razao_social'].trim() === ''){
                erros += "O campo razao_social é obrigatório!<br>";
            }
            if(!form['logo']){
                erros += "O campo logo é obrigatório!<br>";
            }
            if(!form['slogan'] || form['slogan'].trim() === ''){
                erros += "O campo slogan é obrigatório!<br>";
            }
            if(!form['historia'] || form['historia'].trim() === ''){
                erros += "O campo historia é obrigatório!<br>";
            }

            if(!form['proposito'] || form['proposito'].trim() === ''){
                erros += "O campo proposito é obrigatório!<br>";
            }
            if(!form['missao'] || form['missao'].trim() === ''){
                erros += "O campo missao é obrigatório!<br>";
            }
            if(!form['visao'] || form['visao'].trim() === ''){
                erros += "O campo visao é obrigatório!<br>";
            }
            if(!form['valores'] || form['valores'].trim() === ''){
                erros += "O campo valores é obrigatório!<br>";
            }

            return erros;
        },
        handleFileChange(event) {
            const files = event.target.files;
            this.handleFiles(files);
        },
        dragOver(event) {
            event.preventDefault();
            event.target.classList.add('active');
        },
        dragLeave(event) {
            event.target.classList.remove('active');
        },
        dropFile(event) {
            event.preventDefault();
            event.target.classList.remove('active');
            const files = event.dataTransfer.files;
            this.handleFiles(files);
        },
        handleFiles(files) {
            const imagePreview = this.$refs.imagePreview;
            if (!imagePreview || !(imagePreview instanceof HTMLElement)) {
                console.error("Elemento imagePreview não encontrado ou não é um elemento HTML.");
                return;
            }

            for (const file of files) {
                if (file.type.startsWith('image/')) {
                    const reader = new FileReader();
                    reader.readAsDataURL(file);
                    reader.onload = () => {
                        const image = new Image();
                        image.src = reader.result;
                        image.classList.add('preview-image');

                        const closeButton = document.createElement('a');
                        closeButton.innerHTML = '<i class="bi bi-x"></i>';
                        closeButton.classList.add('remove-button');
                        closeButton.addEventListener('click', () => {
                            // Remova o contêiner de imagem quando o botão de fechar for clicado
                            imageContainer.parentNode.removeChild(imageContainer);
                            // Remova o arquivo associado
                            const index = Array.from(imagePreview.children).indexOf(imageContainer);
                            const fileInput = this.$refs.fileInput;
                            const files = fileInput.files;
                            const newFiles = Array.from(files).filter((_, idx) => idx !== index);
                            fileInput.files = newFiles;
                        });

                        const imageContainer = document.createElement('div');
                        imageContainer.classList.add('image-container');
                        imageContainer.appendChild(image);
                        imageContainer.appendChild(closeButton);

                        imagePreview.appendChild(imageContainer);
                    };
                }
            }
        },
        onFileChange(event) {
            this.form.logo = event.target.files[0];
        }

    }
});
</script>

<style>
.error {
    color: red;
}

.success-message {
    color: green;
}

.error-message {
    color: red;
}
</style>
