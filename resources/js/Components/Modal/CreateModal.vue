<script setup>
import { useForm } from '@inertiajs/vue3';

// Define props
const props = defineProps({
    isOpen: {
        type: Boolean,
        required: true,
    },
    columnsList: {
        type: Object,
        required: true,
    },
});

// Define emits
const emit = defineEmits(['close', 'create']);

const formFields = props.columnsList.reduce((fields, column) => {
    fields[column.name] = '';
    return fields;
}, {});

const form = useForm({
    item: formFields,
});

// Methods
const closeCreateModal = () => {
    emit('close');
};

const createItem = () => {
    emit('create', form.item);
    form.item.name = '';
    closeCreateModal();
};
</script>

<template>

    <div v-if="isOpen"
         class="bg-white p-6 rounded shadow-lg">
        <h2 class="text-xl mb-4">Create Item</h2>
        <input v-for="field in Object.keys(form.item)"
               :key="field"
               v-model="form.item[field]"
               class="border p-2 mb-4 w-full"
               :placeholder="field" />
        <div class="flex justify-end">
            <button @click="closeCreateModal"
                    class="mr-2 px-4 py-2 bg-gray-300 rounded">Cancel</button>
            <button @click="createItem"
                    class="px-4 py-2 bg-blue-500 text-white rounded">Create</button>
        </div>
    </div>
</template>
