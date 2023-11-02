<template>
    <section class="bg-gray-100 h-full">
        <div class="bg-gray-200">
            <div class="mx-auto md:flex md:flex-row md:justify-between text-center px-6 py-2 fixed top-0 left-0 right-0 bg-gray-500">
                <div class="flex flex-row justify-center">
                    <div class="bg-gradient-to-r from-purple-600 to-red-400 w-10 h-10 rounded-lg"></div>
                    <h1 class="text-3xl text-gray-50 ml-2 ">E-Shop</h1>
                </div>
                <div class="flex flex-row justify-center">
                    <Nav class="p-2"/>
                    <Link href="/cart" class="bg-gray-400 text-gray-50 hover:bg-purple-400 p-2 rounded-full ml-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 inline-block">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                        </svg>
                        <span>Cart <span class="bg-lime-500 rounded-full py-1 px-2">{{nbreCart}}</span></span>
                    </Link>
                </div>
            </div> <!-- Main Navigation-->
        </div>
        <slot />       
    </section>
</template>

<script>
import Nav from './Nav.vue'
export default{
    components: { Nav },
    computed:{
        nbreCart() {
            return this.$page.props.nbreCart;
        }
    }

}

</script>