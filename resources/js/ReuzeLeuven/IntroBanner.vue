<template>
    <div class="h-full  overflow-hidden relative">
        <img :src="image" class="w-full xl:max-w-7xl  mx-auto">
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
