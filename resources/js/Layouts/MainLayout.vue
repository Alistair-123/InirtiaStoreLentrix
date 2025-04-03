<script setup>
import NavBar from '../Components/NavBar.vue';
</script>

<template>
    <NavBar />
    <div style="padding-block: 14px; padding-inline: 12px">
        <slot></slot>
    </div>
</template>
