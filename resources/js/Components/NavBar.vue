<script setup>
import { Link, router } from '@inertiajs/vue3';

</script>

<template>
    <div class="navbar">
        <div class="branding">
            My Awesome App {{ $page.component }}
        </div>
        <nav class="main-nav">
            <Link href="/" :class="$page.component == 'Welcome' ? 'active' : ''">Home</Link>
            <Link href="/products" :class="$page.component == 'Product/Index' ? 'active' : ''">Products</Link>
            <Link href="/categories" :class="$page.component == 'Category/Index' ? 'active' : ''">Categories</Link>
        </nav>
    </div>
</template>

<style scoped>

.navbar {
    background-color: purple;
    color: white;
    padding: 14px;
    display: flex;
    justify-content: space-between;
}

.branding {
    font-size: 1.3em;
    font-weight: bold;
}

.main-nav {
    display: flex;
    gap: 8px;

    & a {

        padding-inline: 10px;

        &:hover {
            font-weight: bold;
        }

        &.active {
            color: yellow;
            font-weight: 700;
            border-bottom: yellow 1px solid;
        }
    }
}

</style>
