<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
import Header from '@/Components/Header.vue';
import Flash from '@/Components/FlashMessages/Flash.vue';
import Table from '@/Components/Tables/Table.vue';
import Pagination from '@/Components/Pagination/Pagination.vue';

defineOptions({
    layout: AuthenticatedLayout,
})

const props = defineProps({
    ingredients: Object,
    columnsList: Array,
    filters: Object,
    sortAZ: Boolean,
});

</script>

<template>

    <Head :title="$page.component" />
    <Header :title="$page.component" />

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 bg-gray-50 dark:bg-gray-800">

                    <Flash />

                    <section class="container px-4 mx-auto">
                        <!-- Table -->
                        <Table :title="$page.component.split('/')[0]"
                               description="Ingredients list for icecream production"
                               :items="props.ingredients.data"
                               :columnsList="props.columnsList"
                               :total="props.ingredients.total"
                               :search="props.filters.search"
                               :sortAZ="props.sortAZ" />

                        <!-- Pagination -->
                        <Pagination :links="props.ingredients.links" />
                    </section>
                </div>
            </div>
        </div>
    </div>
</template>
