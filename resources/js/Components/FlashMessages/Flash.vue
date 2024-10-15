<script setup>
import { usePage } from '@inertiajs/vue3';
import { watch } from 'vue';

const page = usePage();

const classes = {
    success: 'text-green-700 bg-green-100',
    error: 'text-red-700 bg-red-100',
    warning: 'text-yellow-700 bg-yellow-100',
    info: 'text-blue-700 bg-blue-100',
};

const closeFlashMessage = (key) => {
    page.props.flash[key] = null;
};

const flashReset = () => {
    for (const key in page.props.flash) {
        if (page.props.flash[key]) {
            setTimeout(() => {
                page.props.flash[key] = null;
            }, 5000);
        }
    }
};

// Watch for changes in the flash prop and run flashReset
watch(() => page.props.flash, (newFlash) => {
    flashReset();
}, { deep: true });

</script>

<template>
    <!-- Display flash messages if present -->
    <template v-for="(message, key) in $page.props.flash"
              :key="key">
        <div v-if="message"
             class="mb-4 p-4 rounded flex justify-between items-center"
             :class="classes[key]">
            {{ message }}
            <button @click="closeFlashMessage(key)"
                    class="text-xl"
                    :class="classes[key]">
                &times;
            </button>
        </div>

    </template>
</template>
