<script setup>
import Navigation from '@/Components/Navigation.vue';
</script>

<template>
    <div>
        <div class="min-h-screen bg-gray-100">

            <Navigation />

            <header>
                <slot name="header"></slot>
            </header>
            <!-- Page Content -->
            <main>
                <slot />
            </main>
        </div>
    </div>
</template>
