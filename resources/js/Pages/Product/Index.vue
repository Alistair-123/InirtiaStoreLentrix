<script setup>
import { Link } from '@inertiajs/vue3';
import ProductsTable from '../../Components/ProductsTable.vue';
import ProductCard from '../../Components/ProductCard.vue';
import MainLayout from '../../Layouts/MainLayout.vue';

defineProps({
    products: {
        type: Object,
        required: true
    },
    categories: {
        type: Object,
        required: true
    },
    category: {
        type: Object,
        required: false
    }
});

</script>

<template>
    <MainLayout>
        <h1>Products</h1>
        <hr>
        <div class="main">
            <div class="sidebar">
                <h2>Categories</h2>
                <ul>

                    <li
                        v-for="cat in categories"
                        :key="cat.id"
                        :class="{'active': category && category.id === cat.id}"
                        class="sidebar-link"
                    >
                        <Link :href="'/products/' + cat.id">
                            {{ cat.name }}
                        </Link>
                    </li>

                </ul>
            </div>
            <div class="products">
                <div class="flex items-center justify-between border">
                <h2>
                    Products
                    <span v-if="category">
                        - {{ category.name }}
                    </span>
                </h2>

                <div class="text-2xl">

                    <Link :href="products.first_page_url" >
                        &lArr;
                    </Link>
                    &nbsp;

                    <Link :href="products.prev_page_url" >
                        &larr;
                    </Link>

                    &nbsp;

                    Page {{ products.current_page }} of {{ products.last_page }}
                    &nbsp;

                    <Link :href="products.next_page_url" >
                        &rarr;
                    </Link>
                    &nbsp;

                    <Link :href="products.last_page_url" >
                        &rArr;
                    </Link>
                </div>

                </div>
                <!-- <ProductsTable :products="products" /> -->

                <div class="grid grid-cols-1 gap-2 md:grid-cols-3">
                            <ProductCard v-for="product in products.data" :key="product.id" :product="product" />
                       </div>

            </div>
        </div>
    </MainLayout>

</template>

<style>

.active {
    font-weight: bold;
    color: blue;
    background-color: rgb(84, 168, 237);
    border-radius: 10px;
}

.main {
    display: flex;
    align-items: flex-start;
}

.sidebar {
    width: 300px;
    padding: 20px;
    border-right: 1px solid #ccc;
}

.products {
    flex: 1;
    padding: 20px;
}

.sidebar-link {
    padding-block: 8px;
    border-bottom: 1px solid #888;
}

.sidebar-link:hover {
    background-color: #dfdfdf;
}

</style>
