<script setup>

import { ref } from 'vue';
import MainLayout from '../../Layouts/MainLayout.vue';

defineProps({
    categories: {
        type: Array,
        required: true
    }
});


</script>

<template>
    <MainLayout>
        <h1>Categories</h1>
        <ul>
            <li v-for="category in categories" :key="category.id">
                {{ category.name }} <br>
                {{ category.description }}
            </li>
        </ul>
    </MainLayout>

</template>
