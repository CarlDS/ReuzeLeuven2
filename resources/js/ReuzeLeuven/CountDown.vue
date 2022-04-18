<template>
<div class="pt-5 text-center text-3xl">

    <div v-if="countDown>1">
        {{ countDownDay}} dagen, <span v-if="countDownHour<10">0</span>{{ countDownHour}} uur <span v-if="countDownMinutes<10">0</span>{{countDownMinutes}} minuten en <span v-if="countDownSecond<10">0</span>{{ countDownSecond }} seconden
    </div>

</div>
</template>
<script>
import { defineComponent } from 'vue'

export default defineComponent({
    props: [
        'to'
    ],
    data() {
        return {
            countDown : 1,
            countDownMinutes: 0,
            countDownHour: 0,
            countDownDay: 0,
            countDownSecond: 0,
            startEvent: new Date(this.to)
        }
    },

    methods: {
        countDownTimer() {
            if(this.countDown) {
                setTimeout(() => {
                    this.countDown = Math.floor((this.startEvent - Date.now())/1000);
                    this.countDownDay = Math.floor(this.countDown/60/60/24);
                    this.countDownHour = Math.floor(this.countDown%(60*60*24)/60/60);
                    this.countDownMinutes = Math.floor(this.countDown%(60*60)/60);
                    this.countDownSecond = this.countDown%60;
                    this.countDownTimer()
                }, 1000)
            }
        }
    },
    mounted() {
        this.countDownTimer();
    }


})
</script>
