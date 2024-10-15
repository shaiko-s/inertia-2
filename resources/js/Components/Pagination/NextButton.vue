<script setup>
import { computed } from 'vue';

const props = defineProps({
    link: Object,
})

const link = props.link;

const hasUrl = computed(() => link.url ? true : false);

const classDefault = 'flex items-center px-5 py-2 text-sm text-gray-700 capitalize transition-colors duration-200 bg-white border rounded-md gap-x-2'
const classHover = 'hover:bg-gray-100 dark:bg-gray-900 dark:text-gray-200 dark:border-gray-700 dark:hover:bg-gray-800';
const classDisabled = 'cursor-not-allowed dark:bg-gray-600 dark:text-gray-400 dark:border-gray-700';

</script>

<template>
    <Link v-if="hasUrl" :href="link.url ?? ''" as="button" preserveScroll
       :class="classDefault + ' ' + classHover">
        <span>
            Next
        </span>

        <svg xmlns="http://www.w3.org/2000/svg"
             fill="none"
             viewBox="0 0 24 24"
             stroke-width="1.5"
             stroke="currentColor"
             class="w-5 h-5 rtl:-scale-x-100">
            <path stroke-linecap="round"
                  stroke-linejoin="round"
                  d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
        </svg>
    </Link>

    <span v-else :class="classDefault + ' ' + classDisabled">
        <span>
            Next
        </span>
        <svg xmlns="http://www.w3.org/2000/svg"
             fill="none"
             viewBox="0 0 24 24"
             stroke-width="1.5"
             stroke="currentColor"
             class="w-5 h-5 rtl:-scale-x-100">
            <path stroke-linecap="round"
                  stroke-linejoin="round"
                  d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
        </svg>
    </span>
</template>
