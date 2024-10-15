<script setup>
import { useForm } from '@inertiajs/vue3';
import { defineEmits, onMounted } from 'vue';

// Define props
const props = defineProps({
    isOpen: {
        type: Boolean,
        required: true,
    },
});

// Define emits
const emit = defineEmits(['close', 'create']);

const form = useForm({
    item: {
        name: '',
    },
});

// Use form
onMounted(() => {
    form.item.name = '';
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
         class="fixed inset-0 flex items-center justify-center bg-gray-500 bg-opacity-75">
        <div class="bg-white p-6 rounded shadow-lg">
            <h2 class="text-xl mb-4">Create Item</h2>
            <input v-model="form.item.name"
                   class="border p-2 mb-4 w-full"
                   placeholder="Item Name" />
            <div class="flex justify-end">
                <button @click="closeCreateModal"
                        class="mr-2 px-4 py-2 bg-gray-300 rounded">Cancel</button>
                <button @click="createItem"
                        class="px-4 py-2 bg-blue-500 text-white rounded">Create</button>
            </div>
        </div>
    </div>
</template>
