<script setup>
defineProps({
    title: String,
})
</script>

<template>
    <!-- Page Heading -->
    <header class="bg-white shadow"
            v-if="title">
        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
            <h2 class="text-xl font-semibold leading-tight text-gray-800">
                {{ title.split('/')[0] }}
            </h2>
        </div>
    </header>

</template>
