<script setup>
const props = defineProps({
    products: Array
});
</script>

<template>
    <table>
        <thead>
            <tr>
                <th>Product Name</th>
                <th>Product Description</th>
                <th>Category</th>
                <th class="right">Wholesale Price</th>
                <th class="right">Retail Price</th>
            </tr>
        </thead>
        <tbody>
            <tr v-for="product in products" :key="product.id">
                <td>{{ product.name }}</td>
                <td>{{ product.description }}</td>
                <td>{{ product.category_id }}</td>
                <td class="right">{{ product.whole_sale_price }}</td>
                <td class="right">{{ product.retail_price }}</td>
            </tr>
        </tbody>
    </table>
</template>

<style>
table {
    width:100%;
}

thead>tr {
    background-color: green;
    color: white!important;
}

th, td {
    border: 1px solid #888;
    padding: 2px;
}

.right {
    text-align: right;
}

h2 {
    font-size: 18pt!important;
}

h1 {
    font-size: 24pt!important;
}
</style>
