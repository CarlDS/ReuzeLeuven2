<template>
   <div class="flex flex-col md:flex-row  rounded-lg my-16">
        <div class="text-4xl py-8 px-4 text-center lg:text-left font-bold w-full md:w-1/2 lg:w-1/3 shrink-0 md:border-r-2 md:border-gray-400">
            Reuzen in Leuven
        </div>
        <div class="flex-1 grid grid-cols-2 lg:grid-cols-3 gap-1 px-4">

            <div v-for="reus in reuzen" :key="reus" class="h-56 border-2 border-grey-400 bg-black  justify-between overflow-hidden">
                <Link :href="route('reus', {slug:reus.slug})" class=" flex flex-col text-lg">
                    <p class="border-2 border-green-500 text-center text-white font-bold bg-red-300 hover:bg-red-500">{{reus.naam}}</p>
                    <div class=" border-2 border-red-500 bg-contain bg-center bg-no-repeat h-52 my-2 " :style="{ backgroundImage: 'url(/'+reus.grid.url+')'}"></div>
                </Link>
            </div>
        </div>
   </div>
</template>
<script>
import { defineComponent } from 'vue';
import { Link } from '@inertiajs/inertia-vue3';

export default defineComponent({
    props: [
        'reuzen',
    ],
    components: {
        Link,
    }
})
</script>

