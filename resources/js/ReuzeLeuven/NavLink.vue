<template>
    <Link :href="href" :class="classes">
        <slot />
    </Link>
</template>

<script>
    import { defineComponent } from 'vue'
    import { Link } from '@inertiajs/inertia-vue3';

    export default defineComponent({
        components: {
            Link,
        },
        props: ['href', 'active'],

        computed: {
            classes() {
                return this.active
                    ? 'inline-flex items-center px-1 pt-1 border-b-2 border-white-400 text-sm font-medium leading-5 text-white-900 focus:outline-none focus:border-white-700 transition'
                    : 'inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium leading-5 text-white-500 hover:text-white-700 hover:border-white focus:outline-none focus:text-white-700 focus:border-white-300 transition'
            }
        }
    })
</script>
