<template>
    <div class="shadow-lg">
        <Link :href="'/shop/' + productSlug">
            <img :src="'/images/products/' + productSlug + '.jpg'" alt="Men1" class="rounded-t-lg">
        </Link>
        <div class="p-5 flex justify-between">
            <h3><Link :href="'/shop/' + productSlug" >{{ productTitle }}</Link></h3>
            <div class="font-semibold ">${{ presentPrice(productPrice) }}</div>
        </div>
        <div class="flex flex-row m-3">
            <div class="bg-black w-5 h-5 rounded-full shadow-md mr-2"></div>
            <div class="bg-blue-800 w-5 h-5 rounded-full shadow-md mr-2"></div>
            <div class="bg-white w-5 h-5 rounded-full shadow-md mr-2"></div>
            <div class="bg-red-800 w-5 h-5 rounded-full shadow-md mr-2"></div>
            <div class="bg-green-700 w-5 h-5 rounded-full shadow-md mr-2"></div>
        </div>
        <div class="flex flex-row m-3">
            <div class="border-2 border-gray-300 text-gray-400 rounded-md text-xs px-2 py-1 mr-2">XL</div>
            <div class="border-2 border-gray-300 text-gray-400 rounded-md text-xs px-2 py-1 mr-2">XXL</div>
            <div class="border-2 border-gray-300 text-gray-400 rounded-md text-xs px-2 py-1 mr-2">L</div>
            <div class="border-2 border-gray-300 text-gray-400 rounded-md text-xs px-2 py-1 mr-2">M</div>
            <div class="border-2 border-gray-300 text-gray-400 rounded-md text-xs px-2 py-1 mr-2">S</div>
        </div>
        <div class="flex flex-col xl:flex-row justify-between m-3">
            <a href="#" class="flex flex-row bg-gradient-to-r from-red-600 to-pink-500 rounded-full p-2 text-gray-50
                    hover:from-pink-600 hover:to-pink-600 text-sm my-1 justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 mr-1">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                </svg>
                Add to cart
            </a>
            <a href="#" class="flex flex-row bg-purple-600 rounded-full px-4 py-2 text-gray-50 hover:bg-purple-700 text-sm justify-center my-1">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 mr-1">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
                        </svg>                                  
                View details
            </a>
        </div>
    </div>
</template>

<script>
import {usePrice} from '../composables/usePrice'
export default{
    props:{
        productTitle: String,
        productSlug: String,
        productPrice: Number,
    },

    
    /* methods:{
        presentPrice(priceInCents) {
            //  Convertir les centimes en dollars
            const priceInDollars = priceInCents / 100;

            // Formater le prix avec deux décimales
            return priceInDollars.toFixed(2);
        }
    }, */
    setup(){
        let {presentPrice} = usePrice();

        return { presentPrice };
    },
}
</script>