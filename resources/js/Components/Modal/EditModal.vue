<script setup>
import { defineProps, defineEmits } from 'vue';

const props = defineProps({
    isOpen: {
        type: Boolean,
        required: true,
    },
    item: {
        type: Object,
        required: true,
    },
    columnsList: {
        type: Object,
        required: true,
    },
});

const emit = defineEmits(['close', 'save']);

function closeEditModal() {
    emit('close');
}

function saveItem() {
    emit('save', props.item);
    closeEditModal();
}
</script>

<template>
    <div v-if="isOpen"
         class="bg-white p-6 rounded shadow-lg">
        <h2 class="text-xl mb-4">Edit Item</h2>
        <div v-for="column in columnsList"
             :key="column.name">
            <label :for="column.name">{{ column.label }}</label>
            <input v-model="props.item[column.name]" :id="column.name" :name="column.name" type="text"
                   class="border p-2 mb-4 w-full"
                   :placeholder="item[column.name]" />
        </div>
            <div class="flex justify-end">
                <button @click="closeEditModal"
                        class="mr-2 px-4 py-2 bg-gray-300 rounded">Cancel</button>
                <button @click="saveItem"
                        class="px-4 py-2 bg-blue-500 text-white rounded">Save</button>
            </div>
        </div>
</template>
