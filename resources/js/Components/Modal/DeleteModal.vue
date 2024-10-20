<script>
export default {
    props: {
        isOpen: {
            type: Boolean,
            required: true,
        },
        item: {
            type: Object,
            required: true,
        },
    },
    methods: {
        closeModal() {
            this.$emit('close');
        },
        confirmDeletion() {
            this.$emit('delete', this.item);
            this.closeModal();
        },
    },
};
</script>

<template>
    <div v-if="isOpen"
         class="bg-white p-6 rounded shadow-lg">
        <h2 class="text-xl mb-4">Confirm Deletion</h2>
        <p>Are you sure you want to delete <strong>{{ item.name }}</strong>?</p>
        <div class="flex justify-end mt-4">
            <button @click="closeModal"
                    class="mr-2 px-4 py-2 bg-gray-300 rounded">
                Cancel
            </button>
            <button @click="confirmDeletion"
                    class="px-4 py-2 bg-red-500 text-white rounded"
                    autofocus>
                Delete
            </button>
        </div>
    </div>
</template>
