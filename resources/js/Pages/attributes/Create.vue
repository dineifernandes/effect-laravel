<template>
    <Head :title="$props.title" />
    <AppLayout title="Atributo">
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


                    <div class="col-md-8 mb-3">
                        <label class="form-label">Vantagem</label>
                        <input v-model="form.vantagem" type="text" class="form-control" id="vantagem" name="vantagem">
                        <!-- Exibir erro -->
                        <div v-if="errors.vantagem" class="">{{ errors.vantagem }}</div>
                    </div>


                    <div class="col-md-4 mb-3">
                        <label class="form-label">Nota</label>
                        <input v-model="form.nota" type="number" step="any" class="form-control" id="nota" name="nota">
                        <!-- Exibir erro -->
                        <div v-if="errors.nota" class="">{{ errors.nota }}</div>
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
                        <Link :href="route('attributes.index')" class="btn btn-outline-dark btn-icon me-2" data-bs-toggle="tooltip" title="Cancelar">
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
            default: 'Atributos'
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
            status: '1',
            vantagem: '',
            nota: null,
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
                    const response = await this.form.post(route('attributes.store'));

                    Toast.fire("","Operação realizada com sucesso!","success");

                    this.form.reset();

                }catch(err){
                    Toast.fire("","Falha ao realizar a operação!","error");
                }


            } else {
                Toast.fire("",isValid,"error");

            }
        },
        validateForm(form) {

            let erros = "";

            if(!form['nome'] || form['nome'].trim() === ''){
                erros += "O campo nome deve ser preenchido!<br>";
            }

            if(!form['vantagem'] || form['vantagem'].trim() === ''){
                erros += "O campo vantagem deve ser preenchido!<br>";
            }

            if(!form['status'] || form['status'].trim() === ''){
                erros += "O campo status deve ser selecionado!<br>";
            }

            if (isNaN(parseFloat(form['nota'])) || parseFloat(form['nota']) < 0) {
                erros += "O campo nota deve preenchido e não negativo!<br>";
            }

            return erros;
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
