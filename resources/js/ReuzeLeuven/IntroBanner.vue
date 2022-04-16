<template>
    <div class="h-full lg:h-96 overflow-hidden relative">
        <img :src="data-image" class="w-full xl:w-5/6 xl:-mt-24 mx-auto">
    </div>
</template>
<script>
import { defineComponent } from 'vue'

export default defineComponent({
    props: [
        'data-image',
    ]
})
</script>
