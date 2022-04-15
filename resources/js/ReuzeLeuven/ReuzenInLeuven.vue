<template>
   <div class="flex flex-col md:flex-row  rounded-lg my-16">
        <div class="text-4xl py-8 px-4 text-center lg:text-left font-bold w-full md:w-1/2 lg:w-1/3 shrink-0 md:border-r-2 md:border-gray-400">
            Reuzen in Leuven
        </div>
        <div class="flex-1 grid grid-cols-2 lg:grid-cols-3 gap-1 px-4">

            <div v-for="reus in reuzen" :key="reus" class="h-56 border-2 border-grey-400 bg-black flex flex-col justify-between overflow-hidden">
                <p class="text-center text-white font-bold bg-red-300 hover:bg-red-500">{{reus.naam}}</p>
                <div class="bg-contain bg-center bg-no-repeat h-52" :style="{ backgroundImage: 'url('+reus.grid.url+')'}"></div>
            </div>
        </div>
   </div>
</template>
<script>
import { defineComponent } from 'vue'

export default defineComponent({
    props: [
        'reuzen',
    ],
    data() {
        return {
            giants: [
                {
                    id: 1,
                    naam: 'Kobe Koeieschieter',
                    image: 'images/kobe3.jpeg',
                    beschrijving :'Ter gelegenheid van 4 x 11 jaar Orde van de Pietermannen, schonk de carnavalsvereniging in 2011 een reus aan de stad: Kobe Koeienschieter. De reus Kobe Koeienschieter staat officieel ingeschreven in het bevolkingsregister en werd ook gedoopt in de Sint-Pieterskerk. Zijn naam verwijst naar één van de bijnamen van de Leuvenaars, koeienschieters. De legende gaat terug tot de 17de eeuw, toen de Fransen een groot deel van Europa overheersden en witte pofbroeken droegen. Toen de Leuvenaars op een dag verdachte witte vlekken in de mist zagen bewegen, openden ze het vuur op wat zij dachten dat de Fransen waren. Uiteindelijk bleken de witte vlekken koeien te zijn. De 4,4 m hoge Kobe draagt een donkergrijze rok en een lichtgrijs hemd met het wapenschild van Leuven. Hij trekt er net zoals zijn andere medereuzen geregeld op uit om deel te nemen aan verschillende stoeten.',
                    beheerder: 'Orde van de Pietermannen',
                },
                {
                    id: 2,
                    naam: 'Fiere Margriet',
                    image: 'images/fiere1.jpeg',
                    beschrijving :'In 2013 pakten de Mannen van \'73 uit met een stunt: een nieuwe reuzenstoet \'ReuzeLeuven\' én een nieuwe reuzin, Fiere Margriet. De reuzin verwijst naar een van de bekendste legendes van Leuven. De legende luidt als volgt: Margaretha van Loven werkt als dienstmeisje in de herberg van haar oom Amandus in de Muntstraat. Op een avond komt er een reizigersgezelschap toe, maar het blijken overvallers. Die pelgrims vermoorden haar familieleden en nemen Margaretha mee buiten de stad. Daar proberen de overvallers haar te verkrachten, maar Margaretha biedt weerstand (vandaar de naam Fiere Margriet). Uiteindelijk vermoorden ze haar en gooien haar lichaam in de Dijle. Wonder boven wonder zinkt het lichaam van Fiere Margriet niet, maar drijft op miraculeuze wijze stroomopwaarts naar Leuven. Tijdens \'ReuzeLeuven\', op 1 juni 2013, stelden de Mannen van \'73 trots hun reuzin voor. Fiere Margriet werd officieel ingehuldigd en  ingeschreven in het geboorteregister. De reuzin kreeg een meter, schepen Denise Vandevoort, en een peter, schepen Dirk Vansina. Op 31 mei 2014, de tweede \'ReuzeLeuven\' werd Fiere Margriet geheel volgens de reuzentraditie ook plechtig gedoopt. Voor die speciale gebeurtenis kwamen nog een 20-tal andere reuzen naar Leuven om deel te nemen aan de stoet en het doopfeest. Fiere Margriet kreeg ook een officiële meter - en peter -reus: respectievelijk reuzin Germaine De Walin uit Neerwinden en reus Vaantjesboer uit Halle. Sinds ze is gedoopt, neemt ze deel aan andere reuzenstoeten in ons land.Wil je meer weten over reuzin Fiere Margriet of wil je haar aanwezigheid op jouw evenement? Neem dan contact op met de voorzitter van de Mannen van 1973.',
                    beheerder: 'Mannen van 1973',
                },
                {
                    id: 3,
                    naam: 'Koningin Hedwig van Polen',
                    image: 'images/hedwig4.jpeg',
                    beschrijving : '<p>Op 17 oktober 2020 vierde de Poolse School Wislawa Szymborska de geboorte van hun nieuwe reuzin: koningin Hedwig van Polen. Polen kent zelf geen reuzencultuur, maar via koningin Hedwig, geeft de Poolse school graag een Poolse touch aan de reuzencultuur in Leuven. De Poolse gemeenschap is immers de derde grootste internationale gemeenschap in Leuven.</p><p class="text-xl">Poolse koningin</p><p>Poolse School Wislawa Szymborska koos voor koningin Hedwig van Polen (1384-1399) omdat ze de eerste vrouwelijke vorstin van Polen was en een belangrijke rol speelt in de Poolse geschiedenis. Koningin Hedwig stichtte verschillende ziekenhuizen, kloosters en scholen. In haar testament schonk ze een deel van haar juwelen aan de universiteit van Krakau. Net als de Poolse School Wislawa Szymborska vandaag, droeg koningin Hedwig onderwijs en opleiding dus hoog in het vaandel.</p><p class="text-xl">Zusterstad van Leuven</p><p>Koningin Hedwig leefde, stierf en is begraven in de Poolse stad Krakau, een zusterstad van Leuven. In de kathedraal van Krakau kan je een groot beeld van haar bezoeken.</p><p class="text-xl">Heilige Hedwig</p><p>Koningin Hedwig was erg geliefd in Polen, maar ze werd slechts 25 jaar. Na haar dood, werd ze heilig verklaard. Oorspronkelijk waren alle figuren in de Vlaamse reuzencultuur heiligen. </p><p class="text-xl">Een Poolse dame</p><p>Voor haar uiterlijk ging de Poolse school op zoek naar afbeeldingen van de koningin, maar die bleken erg beperkt. Ze kozen alvast voor enkele typische kenmerken van een jong, Slavisch meisje zoals blond haar, blauw ogen en uitgesproken jukbeenderen. Koningin Hedwig zat immers al op 10-jarige leeftijd op de troon.</p><p class="text-xl">Meter en Peter</p><p>Zoals de traditie het voorschrijft, is de Poolse reuzin na haar geboorte ingeschreven in het Leuvense bevolkingsregister. De Leuvense schepen van onderwijs Lalynn Wadera is meter, gemeenteraadslid Zeger Debyser is peter. Reuzenpeter is de Chinese reus Da Tong. Tijdens Reuzeleuven 2021 krijgt koningin Hedwig haar plechtige doopsel.</p>',
                    beheerder: 'Poolse School Wislawa Szymborska'
                },
                {
                    id: 4,
                    naam: 'Da Tong',
                    image: 'images/datong7.jpeg',
                    beschrijving: '<p>Reus Da Tong is een initiatief van Nihao Leuven, een Leuvense vereniging die de banden tussen de Chinese gemeenschap en Leuvenaars wil versterken.</p><p class="text-xl">Reuzentweeling</p><p>De eerste versie van de Chinese reus Da Tong werd gecreëerd in 2017 door Nihao Leuven en Femma Naaisalon Leuven. In die eerste versie was reus Da Tong een onderdeel van de reuzentweeling van de afdeling Diversiteit en Gelijke Kansen van de stad Leuven. Bijzonder aan deze reuzen is dat hun identiteit kan veranderen, naargelang de groep die de reus adopteert.</p><p class="text-xl">Da Tong groeit</p><p>Gebeten door de reuzencultuur, maakt Nihao Leuven in 2020 een grotere Da Tong. Die is bijna 4 meter hoog, krijgt wielen en blijft zijn beweeglijke handen en armen behouden. Voor zijn outfit werkt Nihao opnieuw samen met Femma. Het hoofd van de vroegere Da Tong is te klein. Samen met het Therapeutisch Activiteitencentrum van Sint-Kamillus in Bierbeek maken ze een groter hoofd in papier-maché. Zijn gezicht wordt verfijnd, maar zijn oorspronkelijke identiteit en looks worden behouden. </p><p class="text-xl">Chinese krijger</p><p>Reus Da Tong is een Chinese krijger, geïnspireerd op het terracottaleger. Deze boogschutter uit het terracottaleger streeft naar een veilige en vredige samenleving na de oorlogen voor de Qin-dynastie in 221 v.C. Nihao baseert zich op een figuur uit het terracottaleger omdat dit ook in het westen bekend is. De leden van Nihao kozen het gezicht en de naam van de reus. Belangrijk voor hen was dat de naam ook voor niet-Chineestaligen eenvoudig uit te spreken is.</p><p class="text-xl">Wapenfeiten</p><p>Da Tong is actief en geëngageerd. Naast de ReuzeLeuvenstoet duikt hij ook op tijdens Chinees Nieuwjaar in Leuven en loopt hij mee in de optocht van de \'dag tegen armoede\' in Leuven.<br>In oktober 2020 wordt de grote Da Tong al meteen peter van de dan net geboren Poolse reuzin, koningin Hedwig.<br>Tijdens Reuzeleuven 2021 krijgt Da Tong zijn plechtige doopsel. </p>',
                    beheerder: 'Nihao Leuven'
                },

            ]
        }

    }
})
</script>

