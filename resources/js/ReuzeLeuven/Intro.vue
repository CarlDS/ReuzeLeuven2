<template>
<div >
    <h1 class="text-4xl font-bold p-4">Reuzen</h1>
</div>
<div>
    <div class="flex flex-col md:flex-row">
        <img src="/images/fiere.jpeg" class="block w-full md:w-1/2 lg:w-1/3 h-full">
        <div class="flex-col">
            <p class="text-gray-800 px-4 pb-4">
                Reuzen bestaan in alle maten en gewichten. In de eerste plaats staan reuzen natuurlijk bekend om hun grote lengte. Niet alle reuzen zijn echter zo gigantisch. Er zijn bijvoorbeeld ook heel wat reuzen die kinderen voorstellen en een stuk kleiner zijn.<br>
                Een reus bouwen is een werk van vele handen. Meestal maakt een lokale kunstenaar of creatieveling het hoofd van de reus. Samen met de armen en de handen van de reus werd het hoofd tot voor enkele decennia van papier-maché gemaakt of uit hout gesculpteerd. Tegenwoordig wordt daarvoor polyester gebruikt. Het lichaam van de reus bestond vroeger meestal uit rotan, dat door mandenmakers gevlochten werd. In het lichaam wordt een draagstructuur aangebracht, zodat de dragers de pop op de schouders kunnen nemen. Sinds enkele decennia wordt het lichaam uit metalen buizen en ijzerdraad vervaardigd. Soms wordt er in de romp ook piepschuim verwerkt. Tegenwoordig wordt het reuzenskelet meestal volledig op wieltjes geplaatst. Daardoor wordt de constructie heel wat lichter en kan de reus in plaats van gedragen voortgereden worden.
                <!-- <button v-if="!meerinfo" class="px-4 text-red-500" @click="meerInfo">Meer info</button> -->
            </p>
            <p class="text-gray-800 px-4 pb-4">
                De levensloop van reuzen vertoont veel gelijkenissen met die van mensen. Zo gaat de “geboorte” van een nieuwe reus bijvoorbeeld vaak gepaard met een aantal geboorterituelen. Een nieuwe reus wordt meestal met een plechtige viering gedoopt. Verder krijgt een reus - net zoals een mensenkind - ook een peter en een meter, die beloven dat ze voor hem zullen zorgen en over zijn toekomst zullen waken. Aan de doopviering wordt vaak ook een stoet gekoppeld, waar ook andere reuzen in meewandelen.Soms trekt de stoet naar het gemeentehuis, om er op ludieke wijze aangifte te doen van de nieuwe inwoner. Vaak gaat dit gepaard met het opstellen van een heuse geboorteakte.
                <!-- <button v-if="!meerinfo" class="px-4 text-red-500" @click="meerInfo">Meer info</button> -->
            </p>
            <p v-if="true" class="text-gray-800 px-4 pb-4">
                Reuzen kunnen verder ook huwen en kinderen krijgen. In tegenstelling tot mensen hoeven zij zich daarbij niet te houden aan wettelijke verplichtingen en aan natuurlijke beperkingen zijn ze evenmin onderworpen. Het is bijvoorbeeld goed mogelijk dat een reus op een en dezelfde dag geboren en gedoopt wordt en in het huwelijksbootje stapt. Bepaalde gemeenten bezitten meerdere reuzen, die samen een of meerdere reuzenfamilie(s) vormen. Soms wordt er zelfs een grootvader -of moeder in de familie aangeduid en net zoals bij mensen gebeurt het wel eens dat er een jubileum gevierd wordt. Het komt ook voor dat reuzen als ambassadeurs van hun gemeente een eretitel toegekend krijgen, die dan met een erelint of medaille op de romp van de reus voor iedereen zichtbaar wordt gemaakt.
                <!-- <button v-if="meerinfo" class="px-4 text-red-500" @click="meerInfo">Minder info</button> -->
            </p>
        </div>

    </div>

</div>
</template>
<script>
import { defineComponent } from 'vue'

export default defineComponent({
    data() {
        return {
            meerinfo: false,
        }
    },
    methods: {
        meerInfo(){
            this.meerinfo = !this.meerinfo;
        }
    }

})
</script>
