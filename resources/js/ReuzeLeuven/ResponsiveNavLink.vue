<template>
    <div>
        <button :class="classes" class="w-full text-left" v-if="as == 'button'">
            <slot></slot>
        </button>

        <Link :href="href" :class="classes" v-else>
            <slot />
        </Link>
    </div>
</template>

<script>
    import { defineComponent } from 'vue';
    import { Link } from '@inertiajs/inertia-vue3';

    export default defineComponent({
        components: {
            Link,
        },
        props: ['active', 'href', 'as'],

        computed: {
            classes() {
                return this.active
                    ? 'block pl-3 pr-4 py-2 border-l-4 border-red-400 text-base font-medium text-white-700 bg-red-500 focus:outline-none focus:text-white-800 focus:bg-red-500 focus:border-red-500 transition'
                    : 'block pl-3 pr-4 py-2 border-l-4 border-transparent text-base font-medium text-white-600 hover:text-white-800 hover:bg-red-300 hover:border-red-500 focus:outline-none focus:text-white-800 focus:bg-red-500 focus:border-red-500 transition'
            }
        }
    })
</script>
