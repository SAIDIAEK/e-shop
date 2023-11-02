<template>
    <Head title="Cart" />
    <div class="pt-20 bg-white ">
        <div class="mx-20 grid grid-cols-3 ">
            <div class="col-span-2 ">
                <div class="flex flex-row justify-between">
                    <h2 class="text-xl font-bold border-b border-gray-300 pb-4">{{nbreCart}} items in shopping cart</h2>

                    <button v-show="nbreCart" class="border rounded-lg px-2" @click.prevent="empty">Empty the Cart</button>
                </div>
                <div v-for="(item, index) in cart" :key="index">
                    <div class="grid grid-cols-5 py-4 border-b border-gray-300 justify-center place-items-center">
                        <img :src="'/images/products/'+item.options.slug+'.jpg' " alt="product image">
                        <div class="col-span-2 ">
                            <div class="text-lg text-gray-900">{{item.name}}</div>
                            <div class="text-lg text-gray-500">{{ item.options.details }} </div>
                        </div>
                        <div>
                            <div class="text-sm text-gray-700 font-semibold">Remove</div>
                            <div class="text-sm text-gray-700 font-semibold">Save for later</div>
                        </div>
                        <div class="flex flex-row m-4">
                            <input type="number" name="qty" v-model="item.qty" class=" mr-2 w-10" @change.prevent="update(item.qty, index)">
                            <div class="font-semibold">${{presentPrice(item.price) }}</div>
                        </div>
                    </div> <!-- Cart Card-->
                </div>
                
            </div>
        </div>
    </div> <!-- Cart Section-->

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
    import { router, useForm } from '@inertiajs/vue3'
    import { ref, computed } from 'vue'
    import ProductCard from '../Components/ProductCard.vue'
    import {usePrice} from '../composables/usePrice'
    import { usePage } from '@inertiajs/vue3'

    let props = defineProps({
        productsAlsoLike: Object, 
        cart: Object
    });

    let {presentPrice} = usePrice();

    function empty(){
        router.get('/emptycart');
    }

    

    const form = useForm({
        qty: 0,
    })
    function update(qty, index){
        form.qty = qty;
        form.patch('/cart/update/'+ index, {
            preserveScroll: true,
        });
    }
    const page = usePage()
    const nbreCart = computed(() => page.props.nbreCart)
    
</script>