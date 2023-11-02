
<template>
    <Head title="Laptop" />
    <div class="pt-20 bg-white ">
        <div class="mx-10">
            <h2 class="text-3xl font-semibold">Laptop's Collection</h2>
            <div class="grid grid-flow-row grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-10 my-5">
                <ProductCard 
                    v-for="product in products.data"
                    :productTitle="product.name"
                    :productSlug="product.slug"
                    :productPrice="product.price"
                    :key="product.id"
                />
            </div>
            <Pagination :links="products.links" class="mt-12 text-center" />
        </div>
    </div> <!-- Laptop's collection-->
    <div class="mx-10">
        <div class="rounded-lg shadow-lg my-20 flex flex-row">
            <div class="lg:w-3/5 w-full bg-gradient-to-r from-black to-purple-900 lg:via-purple-900 lg:to-transparent rounded-lg text-gray-100 p-12">
                <div class="lg:w-1/2 ">
                    <h3 class="text-xl font-extrabold mb-4">Suscribe to get our offers first</h3>
                    <p class="mb-4 leading-relaxed">Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque, corporis? Ipsum quod perspiciatis tenetur totam dolorum eum reprehenderit obcaecati earum?</p>
                    <input type="email" name="email" id="email" class="bg-gray-600 text-gray-200 placeholder-gray-400 px-4 py-3 w-full rounded-lg focus:outline-none mb-4" placeholder="Enter Email Adress">
                    <button type="submit" class="bg-red-600 py-3 rounded-lg w-full">Suscribe</button>
                </div>
            </div>
            <div class="lg:w-2/5 hidden lg:flex lg:flex-row">
                <img src="images/subscribe-banner.png" alt="Newsletter images" class="h-96">
            </div>
        </div> <!-- Newsletter Section-->

        <div class="border-t-2 border-gray-300 flex flex-row justify-between py-5 text-sm">
            <div class="mb-4">
                <a href="#" class="mx-2.5">About</a>
                <a href="#" class="mx-2.5">Private Policy</a>
                <a href="#" class="mx-2.5">Terms of Services</a>
            </div>
            <p>&copy; Copyright Reserver 2023</p>
        </div> <!-- Footer Section-->
    </div>
</template>

<script setup>
    import ProductCard from './Components/ProductCard.vue'
    import Pagination from './Shared/Pagination.vue'

    let props = defineProps({
        products: Object, 
    });
</script>