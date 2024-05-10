<template>
    <Head :title="$props.title" />
    <AppLayout title="Dashboard">
        <div class="card mb-4">
            <div class="card-body">
                <h6 class="card-title mb-4">Dashboard</h6>
                <div class="row">
                    <div class="col-md-12">

                    </div>
                </div>
            </div>
        </div>
    </AppLayout>
</template>

<script>
import AppLayout from "./AppLayout.vue";
import {defineComponent} from "vue";
import {Head} from "@inertiajs/vue3";

export default{
    props:{
        title:{
            type: String,
            default: "Dashboard"
        }
    },
    components:{
        Head,
        AppLayout
    }
}


</script>

<style>

</style>
