<template>
    <Head :title="$props.title" />
    <AppLayout title="Empresa">
        <div class="card">
            <div class="card-body">
                <h6 class="card-title mb-4">Preencha os campos abaixo:</h6>

                <!-- Exibir mensagem de sucesso -->

                <form class="row" method="post" @submit.prevent="submitForm" enctype="multipart/form-data">
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
                        <label class="form-label">Link Vídeo Institucional</label>
                        <input v-model="form.video_institucional" type="text" class="form-control" id="video_institucional" name="video_institucional">
                        <!-- Exibir erro -->
                        <div v-if="errors.video_institucional" class="">{{ errors.video_institucional }}</div>
                    </div>

                    <div class="col-md-4 mb-3">
                        <label class="form-label">Área</label>
                        <input v-model="form.area_construida" type="number" step="any" class="form-control" id="area_construida" name="area_construida">
                        <!-- Exibir erro -->
                        <div v-if="errors.area_construida" class="">{{ errors.area_construida }}</div>
                    </div>

                    <div class="col-md-4 mb-3">
                        <label class="form-label">Fundação</label>
                        <input v-model="form.data_fundacao" type="date" class="form-control" id="data_fundacao" name="data_fundacao">
                        <!-- Exibir erro -->
                        <div v-if="errors.data_fundacao" class="">{{ errors.data_fundacao }}</div>
                    </div>

                    <div class="col-md-4 mb-3">
                        <label class="form-label">Total Funcionários</label>
                        <input v-model="form.quantidade_funcionarios" type="number" class="form-control" id="quantidade_funcionarios" name="quantidade_funcionarios">
                        <!-- Exibir erro -->
                        <div v-if="errors.quantidade_funcionarios" class="">{{ errors.quantidade_funcionarios }}</div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <label for="">Fotos da Empresa</label>
                            <Image @files-updated="updateFiles"/>
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
import { Head, Link, useForm } from "@inertiajs/vue3";
import Swal from 'sweetalert2';

import Notification from "@/Components/Notification.vue";
import Image from "@/Components/Image.vue";

export default defineComponent({
    props: {
        errors: Object,
        title: {
            type: String,
            default: 'Empresa'
        }
    },
    components: {
        Head,
        AppLayout,
        Link,
        Notification,
        Image
    },
    data() {
        const form = useForm({
            nome: '',
            razao_social: '',
            logo: '',
            slogan: '',
            video_institucional: '',
            status: '1',
            area_construida: '',
            data_fundacao: '',
            quantidade_funcionarios: '',
            fotos: []
        });

        return {
            form
        };
    },
    methods: {
        async submitForm() {
            // Execute a validação antes de enviar
            const isValid = this.validateForm(this.form);
            // Se o formulário for válido, faça a submissão
            if (isValid.trim().length <= 0) {
                try {
                    const formData = new FormData();
                    Object.keys(this.form).forEach(key => {
                        if (Array.isArray(this.form[key])) {
                            this.form[key].forEach((item, index) => {
                                formData.append(`${key}[${index}]`, item);
                            });
                        } else {
                            formData.append(key, this.form[key]);
                        }
                    });

                    const response = await this.form.post(route('company.store'), {
                        onUploadProgress: function (progressEvent) {
                            // Opcional: Adicionar lógica de progresso do upload
                        },
                        headers: {
                            'Content-Type': 'multipart/form-data'
                        }
                    });

                    Toast.fire("", "Operação realizada com sucesso!", "success");

                    this.form.reset();
                    this.form.fotos = [];
                } catch (err) {
                    Toast.fire("", "Falha ao realizar a operação!", "error");
                }
            } else {
                Toast.fire("", isValid, "error");
            }
        },
        validateForm(form) {
            // Verifique se os campos obrigatórios estão preenchidos e não são apenas espaços em branco
            const requiredFields = ['nome', 'status'];
            let erros = "";

            if (!form['nome'] || form['nome'].trim() === '') {
                erros += "O campo nome é obrigatório!<br>";
            }
            if (!form['razao_social'] || form['razao_social'].trim() === '') {
                erros += "O campo razao_social é obrigatório!<br>";
            }
            if (!form['logo']) {
                erros += "O campo logo é obrigatório!<br>";
            }
            if (!form['slogan'] || form['slogan'].trim() === '') {
                erros += "O campo slogan é obrigatório!<br>";
            }
            if (!form['data_fundacao'] || form['data_fundacao'].trim() === '') {
                erros += "O campo data de fundação é obrigatório!<br>";
            }
            if (isNaN(parseFloat(form['area_construida'])) || parseFloat(form['area_construida']) < 0) {
                erros += "O campo área construida deve preenchido e não negativo!<br>";
            }
            if (isNaN(parseInt(form['quantidade_funcionarios'])) || parseInt(form['quantidade_funcionarios']) < 0) {
                erros += "O campo quantidade de funcionários deve preenchido e não negativo!<br>";
            }

            return erros;
        },
        handleFileChange(event) {
            const files = event.target.files;
            this.handleFiles(files);
        },
        onFileChange(event) {
            this.form.logo = event.target.files[0];
        },
        updateFiles(files) {
            this.form.fotos = files;
        }
    }
});
</script>
