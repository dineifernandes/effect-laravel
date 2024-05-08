<template>
    <AppLayout title="Polegada">
        <div class="card">
            <div class="card-body">
                <h6 class="card-title mb-4">Controle de Polegada</h6>

                <!-- Exibir mensagem de sucesso -->


                <form class="row" method="post" @submit.prevent="submitForm">
                    <!-- Campo Nome -->
                    <div class="col-md-12 mb-3">
                        <label class="form-label">Nome</label>
                        <input v-model="form.nome" type="text" class="form-control" id="nome" name="nome">
                        <!-- Exibir erro -->
                        <div v-if="errors.nome" class="">{{ errors.nome }}</div>
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
                        <Link :href="route('inches.index')" class="btn btn-outline-dark btn-icon me-2" data-bs-toggle="tooltip" title="Cancelar">
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
import { Link, useForm } from "@inertiajs/vue3";
import Swal from 'sweetalert2'

import Notification from "@/Components/Notification.vue";

export default defineComponent({
    props:{
        errors: Object,
    },
    components: {
        AppLayout,
        Link,
        Notification
    },
    data() {

        const form = useForm({
            nome: '',
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
            if (isValid) {

                try{
                    const response = await this.form.post(route('inches.store'));

                    Toast.fire("","Operação realizada com sucesso!","success");

                    this.form.reset();

                }catch(err){
                    Toast.fire("","Falha ao realizar a operação!" + err,"error");
                }


            } else {
                Toast.fire("","Preencha todos os campos obrigatórios","error");

            }
        },
        validateForm(form) {
            // Verifique se os campos obrigatórios estão preenchidos e não são apenas espaços em branco
            const requiredFields = ['nome', 'status'];
            for (const field of requiredFields) {
                // Verifica se o campo está vazio ou consiste apenas em espaços em branco
                if (!form[field] || form[field].trim() === '') {
                    return false;
                }
            }
            return true;
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
