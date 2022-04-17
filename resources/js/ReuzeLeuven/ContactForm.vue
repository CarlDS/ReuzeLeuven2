<template>
    <div class="w-4/5 mx-auto shadow-lg p-4">
        <div class="text-gray-700 font-bold text-3xl text-center">Heeft u een vraag voor ons? Stel ze hier. Wij antwoorden zo spoedig mogelijk.</div>
        <form @submit.prevent="submit" class="flex flex-col w-2/3 mx-auto p-8 ">
            <div class="my-1 flex justify-between"><label for="naam">Naam</label><input class="w-96 rounded-md" type="text" name="name" id="name" v-model="form.name" required></div>
            <div class="my-1 flex justify-between"><label for="email">e-mail</label><input class="w-96 rounded-md" type="email" name="email" id="email" v-model="form.email" required></div>
            <div class="my-1 flex justify-between"><label for="subject">Onderwerp</label><input class="w-96 rounded-md" type="text" name="subject" id="subject" v-model="form.subject" required></div>
            <div class="my-1 flex justify-between"><label for="message">Jouw vraag</label><textarea rows="10" class="w-96 rounded-md"></textarea></div>
            <button type="submit" class=" self-end text-white font-bold bg-gray-700 rounded-lg border-2 border-gray-900 p-4 my-4 active:bg-gray-400 active:text-gray-700">VERZENDEN</button>
        </form>
    </div>
</template>
<script>
import { reactive } from 'vue'
import { Inertia } from '@inertiajs/inertia'

    export default {
        setup(){
            const form = reactive({
                name: null,
                email: null,
                subject: null,
                message: null,

            })
            function submit() {
                Inertia.post('/contactform', form)
            }
            return {form, submit}
        },
    }
</script>
