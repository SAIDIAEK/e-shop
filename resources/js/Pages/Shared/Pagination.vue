<template>
    <!-- Paginator-->
    <div class="mb-6">
        <component 
          v-for="link in links"
          :is="link.url ? 'Link' : 'span'"
          :href="link.url" 
          v-html="link.label"
          class="px-2 mx-2 text-xl "
          :class="{ 'text-gray-500' : !link.url, 'font-bold' : link.active }"
        />
    </div>
  
</template>

<script>
    export default {
        props:{
            links: Array,
        }
    };
</script>