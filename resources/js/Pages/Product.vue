<template>
    <Head :title="product.name" />
    <div class="pt-20 bg-white pb-2">
        <h2 class="text-3xl font-extrabold text-center">Product Details</h2>
        <div class="sm:grid sm:grid-cols-2 sm:gap-14 mt-10 border border-gray-300 mx-20 my-10 p-10">
            <div class="border border-gray-500 rounded-lg flex justify-center place-items-center ">
                    <img :src="'/images/products/' + product.slug + '.jpg'" alt="mackbookpro" >
            </div>
            <div ><!--  class="col-span-2" -->
                <div class="text-gray-900 text-2xl font-bold mb-6" >{{ product.name }}</div>          
                <div class="text-gray-600 font-semibold">{{ product.details }}</div>
                <div class="text-gray-900 text-2xl font-bold mb-6">${{ presentPrice(product.price) }}</div>
                <div class="text-gray-800 text-xl mb-6">{{ product.description }}</div>
                <button 
                    @click.prevent="add"
                    type="submit"
                    class="border border-black px-4 py-2 mb-6 hover:bg-gray-800 hover:text-gray-50 rounded"
                >
                    Add to Cart
                </button>
            </div>        
        </div> <!-- Product Section-->
    </div>

    <div class="p-10 bg-gray-100 pb-2">
        <h2 class="text-3xl font-semibold">You might also like</h2>
        <div class="grid grid-flow-row grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-10 my-5">
            <ProductCard 
                v-for="productAlsoLike in productsAlsoLike"
                :productTitle="productAlsoLike.name"
                :productSlug="productAlsoLike.slug"
                :productPrice="productAlsoLike.price"
                :key="productAlsoLike.id"
            />
        </div>
    </div> <!-- Might Also Like Section-->
   
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
                <img src="/images/subscribe-banner.png" alt="Newsletter images" class="h-96">
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
    import { reactive } from 'vue'
    import { router } from '@inertiajs/vue3'
    import { useForm } from '@inertiajs/vue3'
    import ProductCard from './Components/ProductCard.vue'
    import {usePrice} from './composables/usePrice'

    let props = defineProps({
        product: Object, 
        productsAlsoLike: Object, 
    });

    const newProduct = reactive({
        id: 0,
        name: "",
        price: 0,
        slug: "",
        details: "",
    })

    let {presentPrice} = usePrice();

    function add(){
        newProduct.id = props.product.id;
        newProduct.name = props.product.name;
        newProduct.price = props.product.price;
        newProduct.slug = props.product.slug;
        newProduct.details = props.product.details;
        router.post('/cart', newProduct )
    };
</script>
