<script setup>
import { useForm } from '@inertiajs/vue3';
import MainLayout from '../Layouts/MainLayout.vue';

defineProps({
    categories: Array, // Ensure we receive categories as an array
});

const form = useForm({
    name: '',
    description: '',
    whole_sale_price: '',  // ✅ Added
    retail_price: '',      // ✅ Added
    category_id: '',
});


const submit = () => {
    form.post('/products', {
        onSuccess: (page) => {
            alert(page.props.flash.success || 'Product added successfully!');
            form.reset();
        },
        onError: (errors) => {
            alert('Failed to add product: ' + Object.values(errors).join(', '));
        }
    });
};

</script>

<template>
    <MainLayout>
        <h1 class="text-2xl font-bold mb-4">Add Product</h1>

        <form @submit.prevent="submit" class="space-y-4 max-w-md bg-white p-6 rounded-lg shadow-md">
            <div>
                <label class="block font-semibold">Name</label>
                <input v-model="form.name" type="text" class="w-full border p-2 rounded" />
                <div v-if="form.errors.name" class="text-red-500 text-sm">{{ form.errors.name }}</div>
            </div>

            <div>
                <label class="block font-semibold">Description</label>
                <textarea v-model="form.description" class="w-full border p-2 rounded"></textarea>
                <div v-if="form.errors.description" class="text-red-500 text-sm">{{ form.errors.description }}</div>
            </div>

            <div>
  <label>Wholesale Price</label>
  <input v-model="form.whole_sale_price" type="number" class="w-full border p-2 rounded" />
  <div v-if="form.errors.whole_sale_price" class="text-red-500 text-sm">{{ form.errors.whole_sale_price }}</div>
</div>

<div>
  <label>Retail Price</label>
  <input v-model="form.retail_price" type="number" class="w-full border p-2 rounded" />
  <div v-if="form.errors.retail_price" class="text-red-500 text-sm">{{ form.errors.retail_price }}</div>
</div>
            <div>
                <label class="block font-semibold">Price</label>
                <input v-model="form.price" type="number" class="w-full border p-2 rounded" />
                <div v-if="form.errors.price" class="text-red-500 text-sm">{{ form.errors.price }}</div>
            </div>

            <div>
                <label class="block font-semibold">Category</label>
                <select v-model="form.category_id" class="w-full border p-2 rounded">
                    <option value="" disabled>Select a category</option>
                    <option v-for="cat in categories" :key="cat.id" :value="cat.id">{{ cat.name }}</option>
                </select>
                <div v-if="form.errors.category_id" class="text-red-500 text-sm">{{ form.errors.category_id }}</div>
            </div>




            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded w-full">Add Product</button>
        </form>
    </MainLayout>
</template>
