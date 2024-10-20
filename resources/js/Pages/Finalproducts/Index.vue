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
    finalproducts: Object,
    columnsList: Object,
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
                               description="Finalproduct list of icecream production"
                               :items="props.finalproducts.data"
                               :columnsList="props.columnsList"
                               :total="props.finalproducts.total"
                               :search="props.filters.search"
                               :sortAZ="props.sortAZ" />

                        <!-- Pagination -->
                        <Pagination :links="props.finalproducts.links" />
                    </section>
                </div>
            </div>
        </div>
    </div>
</template>
