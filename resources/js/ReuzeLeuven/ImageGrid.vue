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


    <div class=" bg-black p-2 ">
        <img :src="current">
    </div>
    <div class="flex flex-nowrap overflow-x-auto">
        <div v-for="image in reus.images" :key="image" class="shrink-0 bg-black px-4 py-2">
            <div v-if="image.id != reus.banner_image_id">
                <img :src="'/'+image.url" class="h-40">
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
            current: '/'+this.reus.images[0].url,
        }
    }
})
</script>
