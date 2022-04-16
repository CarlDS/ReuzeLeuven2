<template>
    <div class="h-full lg:h-96 overflow-hidden relative">
        <img :src="image" class="w-full xl:w-5/6  mx-auto">
    </div>
</template>
<script>
import { defineComponent } from 'vue'

export default defineComponent({
    props: [
        'image',
    ]
})
</script>
