<template>
    <div class="w-full md:w-4/5 mx-auto md:shadow-lg p-2 lg:p-4">
        <div class="h-56 md:h-80 mb-2 md:mb-4">
            <img src="/images/RLLogo.png" class="mx-auto h-full">
        </div>
        <div class="text-gray-700 font-bold text-3xl text-center">
            <p>Heeft u een vraag voor ons?</p>
            <p>Stel ze hier.</p>
            <p>Wij antwoorden zo spoedig mogelijk.</p>
        </div>
        <form @submit.prevent="submit" class="flex flex-col w-full md:w-2/3 mx-auto md:p-8 ">
            <div class="my-2 flex flex-col md:flex-row justify-between">
                <label for="naam">Naam</label>
                <input class="w-full md:w-96 rounded-md" type="text" name="name" id="name" v-model="form.name" required>
            </div>
            <div class="my-2 flex flex-col md:flex-row justify-between"><label for="email">e-mail</label><input class="w-full md:w-96 rounded-md" type="email" name="email" id="email" v-model="form.email" required></div>
            <div class="my-2 flex flex-col md:flex-row justify-between"><label for="subject">Onderwerp</label><input class="w-full md:w-96 rounded-md" type="text" name="subject" id="subject" v-model="form.subject" required></div>
            <div class="my-2 flex flex-col md:flex-row justify-between"><label for="message">Jouw vraag</label><textarea rows="10" class="w-full md:w-96 rounded-md"></textarea></div>
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
