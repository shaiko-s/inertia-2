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
    closeEditModal() {
      this.$emit('close');
    },
    saveItem() {
      this.$emit('save', this.item);
      this.closeEditModal();
    },
  },
};
</script>

<template>
    <div v-if="isOpen" class="fixed inset-0 flex items-center justify-center bg-gray-500 bg-opacity-75">
      <div class="bg-white p-6 rounded shadow-lg">
        <h2 class="text-xl mb-4">Edit Item</h2>
        <input v-model="item.name" class="border p-2 mb-4 w-full" placeholder="Item Name" />
        <div class="flex justify-end">
          <button @click="closeEditModal" class="mr-2 px-4 py-2 bg-gray-300 rounded">Cancel</button>
          <button @click="saveItem" class="px-4 py-2 bg-blue-500 text-white rounded">Save</button>
        </div>
      </div>
    </div>
  </template>
