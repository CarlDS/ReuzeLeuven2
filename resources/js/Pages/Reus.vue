<template>
    <Head title="ReuzeLeuven" />

    <div class="min-h-screen bg-gray-100 dark:bg-gray-300">
        <nav class="w-full max-h-48 bg-red-500 fixed top-0 text-white z-40">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between ">
                    <div class="flex justify-between w-full">
                        <div>
                            <Link :href="route('home')" class="shrink-0 flex flex-row items-center  m-3">
                                <jet-application-mark class="block h-20 sm:h-24 w-20 sm:w-24" />
                                <div class=" text-base text-center md:text-left md:text-3xl font-extrabold ml-8">ReuzeLeuven 2022</div>
                            </Link>
                        </div>
                        <div class="hidden space-x-8 sm:-my-px sm:ml-10 md:flex justify-end">
                            <jet-nav-link :href="route('home')" :active="route().current('home')">
                                <strong>Reuzen</strong>
                            </jet-nav-link>
                            <jet-nav-link :href="route('reuzeninleuven')" :active="route().current('reuzeninleuven')">
                                <strong>Reuzen in Leuven</strong>
                            </jet-nav-link>
                            <jet-nav-link :href="route('reuzenbier')" :active="route().current('reuzenbier')">
                                <strong>Reuzenbier</strong>
                            </jet-nav-link>
                        </div>
                    </div>
                    <div class="-mr-2 flex items-center md:hidden">
                        <button @click="showingNavigationDropdown = ! showingNavigationDropdown" class="inline-flex items-center justify-center p-2 rounded-md text-white hover:text-white hover:bg-red-500 focus:outline-none focus:bg-red-500 focus:text-white transition">
                            <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                                <path :class="{'hidden': showingNavigationDropdown, 'inline-flex': ! showingNavigationDropdown }" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                                <path :class="{'hidden': ! showingNavigationDropdown, 'inline-flex': showingNavigationDropdown }" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
            <div :class="{'block': showingNavigationDropdown, 'hidden': ! showingNavigationDropdown}" class="md:hidden">
                <div class="pt-2 pb-3 space-y-1 bg-red-500">
                    <jet-responsive-nav-link :href="route('reuzeninleuven')" :active="route().current('reuzeninleuven')">
                        Reuzen in Leuven
                    </jet-responsive-nav-link>
                    <jet-responsive-nav-link :href="route('reuzenbier')" :active="route().current('reuzenbier')">
                        Reuzenbier
                    </jet-responsive-nav-link>
                </div>
            </div>
        </nav>
        <header class="bg-white shadow mt-32">
            <intro-banner :image="'/'+reus.banner.url"/>
        </header>
        <main>
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <!-- title -->
                <div class="text-5xl md:text-6xl lg:text-7xl p-2 text-gray-500 font-bold mt-12">
                    <div v-if="reus.slug == 'jean-richard-II'">
                        <span class="text-red-500">J</span>ean<span class="text-red-500"> R</span>ichard II
                    </div>
                    <div v-if="reus.slug == 'da-tong'">
                        <span class="text-red-500">D</span>a <span class="text-red-500">T</span>ong
                    </div>
                    <div v-if="reus.slug == 'fiere-margriet'">
                        <span class="text-red-500">F</span>iere <span class="text-red-500">M</span>argriet
                    </div>
                    <div v-if="reus.slug == 'koningin-hedwig-van-polen'">
                        <span class="text-red-500">K</span>oningin <span class="text-red-500">H</span>edwig van <span class="text-red-500">P</span>olen
                    </div>
                    <div v-if="reus.slug == 'kobe-koeienschieter'">
                        <span class="text-red-500">K</span>obe <span class="text-red-500">K</span>oeienschieter
                    </div>
                    <div v-if="reus.slug == 'prinses-nela'">
                        <span class="text-red-500">P</span>rinses <span class="text-red-500">N</span>ela
                    </div>
                    <div v-if="reus.slug == 'jan-van-den-graetmolen'">
                        <span class="text-red-500">J</span>an van den <span class="text-red-500">G</span>raetmolen
                    </div>
                </div>
                <div class="flex flew-col md:flex-row mt-2 p-1">
                    <div class="w-full md:w-1/3 border-r-2 border-gray-300">{{reus.beschrijving}}</div>
                    <div class="w-full md:w-2/3 flex flex-col-reverse md:flex-row p-4">
                        <div class="block w-1/4 p-2">
                            <div class="border-2 border-red-300 p-4">
                                <h3 class="font-bold text-lg">Weetjes</h3>
                                <p class="mt-2"><strong>Type:</strong><br>{{reus.type}}</p>
                                <p class="mt-2"><strong>Lengte:</strong><br>{{reus.lengte}}</p>
                                <p class="mt-2"><strong>Gewicht:</strong><br>{{reus.gewicht}}</p>
                                <p class="mt-2"><strong>Geboortejaar:</strong><br>{{reus.geboortejaar}}</p>
                            </div>
                        </div>
                        <div class="block border-2 border-gray-300 w-3/4 p-2">
                            <image-grid :reus="reus" />
                        </div>
                    </div>
                </div>


                <reuzen-in-leuven :reuzen="reuzen" />
                <partners />


            </div>
        </main>
    </div>
</template>
<style scoped>
    .bg-gray-100 {
        background-color: #f7fafc;
        background-color: rgba(247, 250, 252, var(--tw-bg-opacity));
    }

    .border-gray-200 {
        border-color: #edf2f7;
        border-color: rgba(237, 242, 247, var(--tw-border-opacity));
    }

    .text-gray-400 {
        color: #cbd5e0;
        color: rgba(203, 213, 224, var(--tw-text-opacity));
    }

    .text-gray-500 {
        color: #a0aec0;
        color: rgba(160, 174, 192, var(--tw-text-opacity));
    }

    .text-gray-600 {
        color: #718096;
        color: rgba(113, 128, 150, var(--tw-text-opacity));
    }

    .text-gray-700 {
        color: #4a5568;
        color: rgba(74, 85, 104, var(--tw-text-opacity));
    }

    .text-gray-900 {
        color: #1a202c;
        color: rgba(26, 32, 44, var(--tw-text-opacity));
    }

    @media (prefers-color-scheme: dark) {
        .dark\:bg-gray-800 {
            background-color: #2d3748;
            background-color: rgba(45, 55, 72, var(--tw-bg-opacity));
        }

        .dark\:bg-gray-900 {
            background-color: #1a202c;
            background-color: rgba(26, 32, 44, var(--tw-bg-opacity));
        }

        .dark\:border-gray-700 {
            border-color: #4a5568;
            border-color: rgba(74, 85, 104, var(--tw-border-opacity));
        }

        .dark\:text-white {
            color: #fff;
            color: rgba(255, 255, 255, var(--tw-text-opacity));
        }

        .dark\:text-gray-400 {
            color: #cbd5e0;
            color: rgba(203, 213, 224, var(--tw-text-opacity));
        }
    }
</style>
<script>
    import { defineComponent } from 'vue';
    import { Head, Link } from '@inertiajs/inertia-vue3';
    import JetApplicationMark from '@/ReuzeLeuven/ApplicationMark.vue';
    import JetNavLink from '@/ReuzeLeuven/NavLink.vue';
    import JetResponsiveNavLink from '@/ReuzeLeuven/ResponsiveNavLink.vue';
    import IntroBanner from '@/ReuzeLeuven/IntroBanner.vue';
    import Intro from '@/ReuzeLeuven/Intro.vue';
    import Partners from '@/ReuzeLeuven/Partners.vue';
    import RlTitle from '@/ReuzeLeuven/RlTitle.vue';
    import ReuzenInLeuven from '@/ReuzeLeuven/ReuzenInLeuven.vue';
    import ImageGrid from '@/ReuzeLeuven/ImageGrid.vue';

export default defineComponent({
    props: [
        'reuzen',
        'reus',
    ],
    components: {
        Head,
        Link,
        JetApplicationMark,
        JetNavLink,
        JetResponsiveNavLink,
        IntroBanner,
        Intro,
        Partners,
        RlTitle,
        ReuzenInLeuven,
        ImageGrid
    },
    data() {
        return{
            current : this.active,
        }
    }
})
</script>

