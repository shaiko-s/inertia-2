<script setup>
import PreviousButton from './PreviousButton.vue';
import NextButton from './NextButton.vue';

defineProps({
    links: Array,
})
</script>

<template>
    <div class="flex items-center justify-between mt-6">

        <PreviousButton :link="links[0]" />

        <div class="items-center hidden md:flex gap-x-3">

            <template v-for="(link, index) in links.slice(1, -1)" :key="index">
                <Link :href="link.url" as="button" preserveScroll
                   class="px-2 py-1 text-sm rounded-md"
                   :class="{
                       'text-blue-800 bg-blue-100/60': link.active,
                       'text-gray-500 dark:hover:bg-gray-800 dark:text-gray-300 hover:bg-gray-100': !link.active
                   }">
                   {{ link.label }}
                </Link>
            </template>

        </div>

        <NextButton :link="links[links.length - 1]" />

    </div>
</template>
