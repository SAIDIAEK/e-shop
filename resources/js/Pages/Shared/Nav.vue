<template>
    <nav >
        <ul class="space-x-6 flex"> <!-- hidden md:flex -->
            <li><NavLink href="/" :active="$page.component === 'Home'">Home</NavLink></li>
            <li><NavLink href="/shop" :active="$page.component==='Shop'">Shop</NavLink></li>
            <li><NavLink href="/blog" :active="$page.component==='Blog'">Blog</NavLink></li>
            <li><NavLink href="/contact" :active="$page.component==='Contact'">Contact</NavLink></li>
        </ul>

    </nav>

</template>

<script>
import NavLink from '@/Shared/NavLink.vue';
export default {
    components: { NavLink },
}
</script>