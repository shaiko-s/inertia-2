<script setup>
import { ref, defineProps } from 'vue';


const props = defineProps({
    message: String,
});

const message = ref(props.message);


</script>

<script>
import AsideSubMenuWithLabelSection from '@/Components/AsideSubMenuWithLabelSection.vue';
import NavbarSearch from '@/Components/NavbarSearch.vue';
import BradcrumbsFull from '@/Components/BradcrumbsFull.vue';
import TablesAvatar from '@/Components/TablesAvatar.vue';

export default {
    components: {
        Aside: AsideSubMenuWithLabelSection,
        Navbar: NavbarSearch,
        Bradcrumbs: BradcrumbsFull,
    },
};
</script>

<template>
    <main class="relative w-full h-full dark:bg-gray-800">

            <!-- Aside Bar -->

            <Aside :message="message" class="z-20" />

            <!-- Bradcrumbs -->
            <Bradcrumbs class="z-10" />

        <!-- <div class="relative left-[320px]"> -->



            <!-- Table Avatar -->
            <TablesAvatar class="z-0" />
        <!-- </div> -->

    </main>
</template>
