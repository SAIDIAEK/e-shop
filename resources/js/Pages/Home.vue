
<template>
    <Head title="Home" />
    <div class="md:flex md:flex-row md:justify-between p-20">
        <div class="md:w-2/5 flex flex-col justify-center items-center">
            <div class="text-gray-600 text-center md:text-left md:self-start">
                <h2 class="font-serif text-4xl mb-4">Some Catchy Title Here</h2>
                <p class="uppercase tracking-wide">Our brand tagline goes here.</p>
                <p class="uppercase tracking-wide">Our brand motto goes here.</p>
            </div>
            <a href="#" class="uppercase bg-gradient-to-r from-red-800 to-purple-400 px-8 py-4 text-gray-50 text-xl rounded-full my-5 md:self-start">shop now</a>
        </div>
        <div class="md:w-3/5">
            <img src="images/hero-img.svg" alt="Hero" class="w-full">
        </div>   
    </div><!-- Hero Section -->

    <div class="bg-white p-20">
        <div class="flex flex-row justify-between ">
            <h2 class="text-3xl font-semibold">Laptop's Collection</h2>
            <Link href="/shop" class="text-xl flex flex-row">
                View All
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-7 ml-1" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" >
                    <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
                </svg>    
            </Link>
        </div>
        <div class="grid grid-flow-row grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-10 my-5">
            <ProductCard 
                v-for="product in products"
                :productTitle="product.name"
                :productSlug="product.slug"
                :productPrice="product.price"
                :key="product.id"
            />
           
        </div>
    </div> <!-- Laptops's collection-->

        <div class="rounded-lg shadow-lg flex flex-row p-20">
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
</template>

<script setup>
    import ProductCard from './Components/productcard.vue'

    let props = defineProps({
        products: Object, 
    });
</script>