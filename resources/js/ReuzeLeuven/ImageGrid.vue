<template>
    <!-- <div class="bg-contain bg-center bg-no-repeat h-52" :style="{ backgroundImage: 'url('+current+')'}"></div>
    <div class="flex flex-nowrap overflow-x-auto">
        <div v-for="image in reus.images" :key="image" class="flex flex-nowrap overflow-x-auto border-2 border-grey-400 bg-black  overflow-hidden">
            <img :src="'/'+image.url" class="">
        </div>
        <div v-for="image in reus.images" :key="image" class="h-56 w-auto border-2 border-grey-400 bg-black  overflow-hidden">
            <div v-if="image.id != reus.banner_image_id">
                <img :src="'/'+image.url" class="">
            </div>
        </div>
    </div> -->


    <div class=" bg-black p-2 h-96 max-h-96">
        <div class="text-sm text-white">{{current.copy}}</div>
        <div class="h-96 mx-auto my-auto"><img :src="'/'+current.url" class="block max-h-full mx-auto my-auto"></div>
    </div>
    <div class="flex flex-nowrap overflow-x-auto">
        <div v-for="image in reus.images" :key="image" class="shrink-0 bg-black px-4 py-2">
            <div v-if="image.id != reus.banner_image_id">
                <button @click="focus(image)"><img :src="'/'+image.url" class="h-40" :alt="image.copy"></button>
            </div>
        </div>
    </div>
</template>
<script>
import { defineComponent } from 'vue';

export default defineComponent({
    props: [
        'reus',
    ],
    data() {
        return{
            current: this.reus.images[0],
        }
    },
    methods : {
        focus(image){
            this.current = image;
        }
    }
})
</script>
