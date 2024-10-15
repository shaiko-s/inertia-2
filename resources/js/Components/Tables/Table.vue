<script setup>
import AZ_Icon from '@/Components/Icons/A-zIcon.vue';
import ZA_Icon from '@/Components/Icons/Z-aIcon.vue';
import DeleteIconButton from '@/Components/Buttons/DeleteIconButton.vue';
import EditIconButton from '@/Components/Buttons/EditIconButton.vue';
import PrimaryButton from '@/Components/Buttons/PrimaryButton.vue';
import EditModal from '@/Components/Modal/EditModal.vue';
import DeleteModal from '@/Components/Modal/DeleteModal.vue';
import CreateModal from '@/Components/Modal/CreateModal.vue';

import { router } from '@inertiajs/vue3';
import dayjs from 'dayjs';
import { ref, watch } from 'vue';
import debounce from 'lodash/debounce';

const props = defineProps({
    ingredients: Array,
    search: String,
    title: String,
    description: String,
    sortAZ: Boolean,
    total: Number,
})

const formatDate = (date) => {
    return dayjs(date).format('DD/MM/YYYY HH:mm');
}

const search = ref(props.search);
const sortAZ = ref(Boolean(props.sortAZ));

const debouncedSearch = debounce((value) => {
    router.get('/ingredients',
        {
            search: value.search,
            sortAZ: Boolean(value.sortAZ)
        },
        {
            preserveState: true,
            replace: true,
        });
}, 500);

watch([search, sortAZ], ([newSearch, newSortAZ]) => {
    debouncedSearch({ search: newSearch, sortAZ: Boolean(newSortAZ) });
});

// Define reactive state variables
const isCreateModalOpen = ref(false);
const isEditModalOpen = ref(false);
const isDeleteModalOpen = ref(false);
const selectedItem = ref({});

// Define methods
const openCreateModal = () => {
    isCreateModalOpen.value = true;
};

const createItem = (newItem) => {
    router.post('/ingredients', newItem, {
        onSuccess: () => {
            closeCreateModal();
        },
    });
};

const closeCreateModal = () => {
    isCreateModalOpen.value = false;
};

const openEditModal = (item) => {
    selectedItem.value = { ...item };
    isEditModalOpen.value = true;
};

const closeEditModal = () => {
    isEditModalOpen.value = false;
};

const saveItem = (updatedItem) => {
    router.put(`/ingredients/${updatedItem.id}`, updatedItem, {
        onSuccess: () => {
            closeEditModal();
        },
    });
};

const openDeleteModal = (item) => {
    selectedItem.value = { ...item };
    isDeleteModalOpen.value = true;
};

const closeDeleteModal = () => {
    isDeleteModalOpen.value = false;
};

const deleteItem = (deletedItem) => {
    router.delete(`/ingredients/${deletedItem.id}`,
        {
            onSuccess: () => {
                closeDeleteModal();
            },
        });
};
</script>


<template>
    <!-- Edit Modal -->
    <EditModal :isOpen="isEditModalOpen"
               :item="selectedItem"
               @close="closeEditModal"
               @save="saveItem" />

    <!-- Delete Modal -->
    <DeleteModal :isOpen="isDeleteModalOpen"
                 :item="selectedItem"
                 @close="closeDeleteModal"
                 @delete="deleteItem" />

    <CreateModal :isOpen="isCreateModalOpen"
                 @close="closeCreateModal"
                 @create="createItem" />

    <!-- Table Title -->
    <div class=" flex items-center justify-between">
        <div class=" flex items-center">
            <div>
                <div class="flex items-center">
                    <h2 class="text-lg font-medium text-gray-800 dark:text-white">{{ title }}</h2>
                    <span class="dark:bg-gray-300 dark:text-gray-800 px-2 py-0.5 ml-2 text-xs rounded-md">{{ props.total }} items</span>
                </div>
                <!-- Table Description -->
                <p class="mt-1 text-sm text-gray-500 dark:text-gray-300">
                    {{ description }}
                </p>
            </div>
            <PrimaryButton @click="openCreateModal"
                           class="ml-6 h-10">
                Create
            </PrimaryButton>
        </div>
        <input v-model="search"
               type="search"
               placeholder="Search"
               class="w-1/4 px-3 py-2 border border-gray-200 dark:border-gray-700 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500" />
    </div>

    <!-- Table Wrapper -->
    <div class="flex flex-col mt-6">
        <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
                <div class="overflow-hidden border border-gray-200 dark:border-gray-700 md:rounded-lg">


                    <!-- Table Tag -->
                    <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">

                        <!-- Table Header -->
                        <thead class="bg-gray-50 dark:bg-gray-800">
                            <tr>
                                <th scope="col"
                                    class="py-3.5 px-4 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400"
                                    >
                                    <button @click="sortAZ = !sortAZ"
                                            class="flex items-center gap-x-3 focus:outline-none">
                                        <span>Ingredient</span>
                                        <AZ_Icon v-if="sortAZ" />
                                        <ZA_Icon v-if="!sortAZ" />

                                    </button>
                                </th>

                                <th scope="col"
                                    class="w-4/12 px-12 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                    Created at
                                </th>

                                <th scope="col"
                                    class="relative w-1/12 py-3.5 px-4">
                                    <span class="sr-only">Edit</span>
                                </th>
                            </tr>
                        </thead>

                        <!-- Table Body -->
                        <tbody class="bg-white divide-y divide-gray-200 dark:divide-gray-700 dark:bg-gray-900">
                            <tr v-for="ingredient in ingredients">
                                <td class="px-4 py-4 text-sm font-medium whitespace-nowrap">
                                    <div>
                                        <h2 class="font-medium text-gray-800 dark:text-white ">
                                            {{ ingredient.name }}
                                        </h2>
                                    </div>
                                </td>
                                <td class="w-4/12 px-4 py-4 text-sm whitespace-nowrap">
                                    <div>
                                        <h4 class="text-gray-700 dark:text-gray-200">
                                            {{ formatDate(ingredient.created_at) }}
                                        </h4>
                                    </div>
                                </td>


                                <td class="px-4 py-4 text-sm whitespace-nowrap">
                                    <div class="flex items-center gap-x-6">

                                        <DeleteIconButton @click="openDeleteModal(ingredient)" />


                                        <EditIconButton @click="openEditModal(ingredient)" />

                                    </div>
                                </td>

                            </tr>


                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>

</template>
