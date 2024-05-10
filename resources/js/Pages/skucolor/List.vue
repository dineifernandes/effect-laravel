<template>
    <Head :title="$props.title" />
    <AppLayout title="Cores SKU">
        <div class="card">
            <div class="card-body">
                <div class="d-md-flex gap-4 align-items-center">
                    <div class="d-none d-md-flex">Buscar: </div>
                    <div class="d-md-flex gap-4 align-items-center">
                        <form class="mb-3 mb-md-0">
                            <div class="row g-3">

                                <div class="col-md-12">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Procurar" v-model="term" :onkeyup="applySearch">
                                        <button class="btn btn-outline-light" type="button">
                                            <i class="bi bi-search"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="dropdown ms-auto">
                        <Link :href="route('skucolor.create')" class="btn btn-primary btn-icon">
                            <i class="bi bi-plus-circle"></i> Novo
                        </Link>
                        <a href="#" data-bs-toggle="dropdown"
                           class="btn btn-link dropdown-toggle"
                           aria-haspopup="true" aria-expanded="false">Ação</a>
                        <div class="dropdown-menu dropdown-menu-end">
                            <a href="#" class="dropdown-item">PDF</a>
                            <a href="#" class="dropdown-item">Excel</a>
                            <a href="#" class="dropdown-item">Imprimir</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="table-responsive">
            <table id="users" class="table table-custom table-lg">
                <thead>
                <tr>
                    <th>
                        <input class="form-check-input select-all" type="checkbox" data-select-all-target="#users"
                               id="defaultCheck1">
                    </th>
                    <th @click="sortBy('id')">
                        Id
                    <span v-if="props.sort == 'id'">
                        <span v-if="props.sortDir == 'asc'"><i class="bi bi-arrow-down"></i></span>
                        <span v-if="props.sortDir == 'desc'"><i class="bi bi-arrow-up"></i></span>
                    </span>
                    </th>
                    <th @click="sortBy('nome')">Nome
                        <span v-if="props.sort == 'nome'">
                        <span v-if="props.sortDir == 'asc'"><i class="bi bi-arrow-down"></i></span>
                        <span v-if="props.sortDir == 'desc'"><i class="bi bi-arrow-up"></i></span>
                    </span>
                    </th>
                    <th @click="sortBy('cor_aproximada')">Cor Aproximada
                        <span v-if="props.sort == 'cor_aproximada'">
                        <span v-if="props.sortDir == 'asc'"><i class="bi bi-arrow-down"></i></span>
                        <span v-if="props.sortDir == 'desc'"><i class="bi bi-arrow-up"></i></span>
                    </span>
                    </th>
                    <th @click="sortBy('data_cadastro')">Cadastro
                        <span v-if="props.sort == 'data_cadastro'">
                        <span v-if="props.sortDir == 'asc'"><i class="bi bi-arrow-down"></i></span>
                        <span v-if="props.sortDir == 'desc'"><i class="bi bi-arrow-up"></i></span>
                    </span>
                    </th>
                    <th @click="sortBy('data_update')">Update
                        <span v-if="props.sort == 'data_update'">
                        <span v-if="props.sortDir == 'asc'"><i class="bi bi-arrow-down"></i></span>
                        <span v-if="props.sortDir == 'desc'"><i class="bi bi-arrow-up"></i></span>
                    </span>
                    </th>
                    <th @click="sortBy('status')">Status
                        <span v-if="props.sort == 'status'">
                        <span v-if="props.sortDir == 'asc'"><i class="bi bi-arrow-down"></i></span>
                        <span v-if="props.sortDir == 'desc'"><i class="bi bi-arrow-up"></i></span>
                    </span>
                    </th>
                    <th class="text-center">#</th>
                </tr>
                </thead>
                <tbody>


                <tr v-for="cor in cores.data" :key="cor.id">
                    <td>
                        <input class="form-check-input" type="checkbox">
                    </td>
                    <td>{{ cor.id }}</td>
                    <td><Link :href="route('skucolor.edit', cor.id)" >{{ cor.nome }}</Link></td>
                    <td>
                        <div :style="{
                            background: cor.cor_aproximada,
                            width: '120px',
                            height: '30px',
                            color: 'white',
                            display: 'flex',
                            alignItems:'center',
                            justifyContent:'center',
                            borderRadius:'10px'}">
                            {{ cor.cor_aproximada }}
                        </div>

                    </td>
                    <td>{{ formatarData(cor.data_cadastro) }}</td>
                    <td>{{ formatarData(cor.data_update) }}</td>
                    <td>
                        <span v-if="cor.status == 1" class="badge bg-success">Ativo</span>
                        <span v-else class="badge bg-danger">Inativo</span>

                    </td>
                    <td class="text-end">
                        <div class="dropdown">
                            <a href="#" data-bs-toggle="dropdown"
                               class="btn btn-floating"
                               aria-haspopup="true" aria-expanded="false">
                                <i class="bi bi-three-dots"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <Link :href="route('skucolor.edit', cor.id)" class="dropdown-item"><i class="bi bi-pencil"></i> Editar</Link>
                                <button @click="destroy(cor.id)" class="dropdown-item text-danger"><i class="bi bi-trash"></i> Remover</button>
                            </div>
                        </div>
                    </td>
                </tr>

                </tbody>
            </table>
        </div>


        <nav class="mt-4" aria-label="Page navigation example">
            <ul class="pagination justify-content-end">
                <!-- Botão "Previous" -->
                <li class="page-item" :class="{ disabled: !cores.prev_page_url }">
                    <a class="page-link" @click.prevent="prevPage" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                    </a>
                </li>

                <!-- Iterar pelas páginas -->
                <template v-if="cores.last_page > 1">
                    <!-- Calcular o conjunto limitado de páginas exibidas -->
                    <template v-for="page in limitedPages" :key="page">
                        <li class="page-item" :class="{ active: page === cores.current_page }">
                            <a class="page-link" @click.prevent="updateTable(page)" href="#">{{ page }}</a>
                        </li>
                    </template>
                </template>

                <!-- Botão "Next" -->
                <li class="page-item" :class="{ disabled: !cores.next_page_url }">
                    <a class="page-link" @click.prevent="nextPage" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                    </a>
                </li>
            </ul>
        </nav>
    </AppLayout>
</template>

<script setup>
import AppLayout from "../AppLayout.vue";
import {defineComponent, ref, computed} from "vue";
import { format } from 'date-fns';
import {Head,Link, router} from "@inertiajs/vue3";
import { Inertia } from '@inertiajs/inertia';

const props = defineProps({
    cores: {
        type: Object,
        default: () => [],

    },
    search:{
        type: String,
        default: ''
    },
    sort:{
        type: String,
        default: () => 'id'
    },
    sortDir:{
        type: String,
        default: () => 'asc'
    },
    title:{
        type: String,
        default: 'Ambiente'
    }
});

defineComponent({
    AppLayout,
    Link,
});

let term = ref(props.search);
let sort = ref(props.sort);
let sortDir = ref(props.sortDir);






function sortBy(field){
    sort.value = field;
    sortDir.value = props.sortDir == 'asc' ? 'desc' : 'asc';;

    updateTable();

}

function formatarData(data) {
    return data ? format(new Date(data), 'dd/MM/yyyy HH:mm:ss') : '';
}

function applySearch(event){

    term.value = event.target.value;
    updateTable();
}

function updateTable(page = 1){

    let query = `?page=${page}`;

    if(term.value){
        query += `&search=${term.value}`;
    }

    if(sort.value){
        query += `&sort=${sort.value}&sortDir=${sortDir.value}`;
    }

    router.visit(`/skucolor/list?${query}`,{preserveState: true, replace: true, preserveScroll: true})
}

// Calcula as páginas a serem exibidas, limitando a um conjunto específico
const limitedPages = computed(() => {
    const currentPage = props.cores.current_page;
    const lastPage = props.cores.last_page;
    const limit = 3; // Quantidade de números a serem exibidos antes e depois da página atual

    let start = currentPage - limit;
    let end = currentPage + limit;

    if (start < 1) {
        start = 1;
        end = Math.min(lastPage, start + limit * 2);
    }

    if (end > lastPage) {
        end = lastPage;
        start = Math.max(1, end - limit * 2);
    }

    return Array.from({ length: end - start + 1 }, (_, i) => start + i);
});

function destroy(id){
    try{
        if(confirm('Tem certeza que deseja remover o registro?')){
            Inertia.delete(route('skucolor.delete', id));
            Toast.fire("","Operação realizada com sucesso!","success");
        }

    }catch(err){
        Toast.fire("",err,"error");
    }

}


</script>

<style>

</style>
