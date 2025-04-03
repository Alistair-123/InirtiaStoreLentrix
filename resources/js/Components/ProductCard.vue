<script setup>
const props = defineProps({
    product: Object
});
</script>

<template>
    <div class="p-8 rounded border border-gray-200 shadow m-4 bg-blue-100">
        <div class="flex">
            <img
                src="https://karanzi.websites.co.in/obaju-turquoise/img/product-placeholder.png"
                alt="Product Image"
                class="w-[100px] h-[100px] object-cover"
            >
            <div class="p-4">
                <h3 class="text-4xl font-bold"><strong>{{ product.name }}</strong> </h3>
                <p v-if="product.description" class="text-gray-700 text-sm mt-1">{{ product.description }}</p>
                <p class="text-sm mt-2">Wholesale Price:${{ product.whole_sale_price }}</p>
                <p class="text-sm">Retail Price: ${{ product.retail_price }}</p>
                <p class="text-sm">Category ID: {{ product.category_id }}</p>
            </div>
        </div>
    </div>
</template>
