<template>
    <Head title="ReuzeLeuven" />

    <div class="min-h-screen bg-white dark:bg-white">
        <nav class="w-full max-h-48 bg-red-500 fixed top-0 text-white z-40" ref="nav">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between ">
                    <div class="flex justify-between w-full">
                        <div>
                            <Link :href="route('home')" class="shrink-0 flex flex-row items-center  m-3">
                                <jet-application-mark class="block h-20 sm:h-24 w-20 sm:w-24" />
                                <div class=" text-base text-center md:text-left md:text-3xl font-extrabold ml-8">ReuzeLeuven</div>
                            </Link>
                        </div>
                        <div class="hidden space-x-8 sm:-my-px sm:ml-10 lg:flex justify-end">
                            <jet-nav-link :href="route('reuzen')" :active="route().current('home')">
                                <p class="text-xl font-bold">Reuzen</p>
                            </jet-nav-link>
                            <jet-nav-link :href="route('reuzeninleuven')" :active="route().current('reuzeninleuven')">
                                <p class="text-xl font-bold">Reuzen in Leuven</p>
                            </jet-nav-link>
                            <jet-nav-link :href="route('reuzenbier')" :active="route().current('reuzenbier')">
                                <p class="text-xl font-bold">Reuzebier</p>
                            </jet-nav-link>
                            <jet-nav-link :href="route('contact')" :active="route().current('contact')">
                                <p class="text-xl font-bold">Contact</p>
                            </jet-nav-link>

                        </div>
                    </div>
                    <div class="-mr-2 flex items-center lg:hidden">
                        <button @click="showingNavigationDropdown = ! showingNavigationDropdown" class="inline-flex items-center justify-center p-2 rounded-md text-white hover:text-white hover:bg-red-500 focus:outline-none focus:bg-red-500 focus:text-white transition">
                            <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                                <path :class="{'hidden': showingNavigationDropdown, 'inline-flex': ! showingNavigationDropdown }" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                                <path :class="{'hidden': ! showingNavigationDropdown, 'inline-flex': showingNavigationDropdown }" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
            <div :class="{'block': showingNavigationDropdown, 'hidden': ! showingNavigationDropdown}" class="lg:hidden">
                <div class="pt-2 pb-3 space-y-1 bg-red-500">
                    <jet-responsive-nav-link :href="route('reuzen')" :active="route().current('reuzen')">
                        Reuzen
                    </jet-responsive-nav-link>
                    <jet-responsive-nav-link :href="route('reuzeninleuven')" :active="route().current('reuzeninleuven')">
                        Reuzen in Leuven
                    </jet-responsive-nav-link>
                    <jet-responsive-nav-link :href="route('reuzenbier')" :active="route().current('reuzenbier')">
                        Reuzebier
                    </jet-responsive-nav-link>
                    <jet-responsive-nav-link :href="route('contact')" :active="route().current('contact')">
                        Contact
                    </jet-responsive-nav-link>
                </div>
            </div>
        </nav>
        <header class="bg-white shadow mt-28 " ref="start">
            <div class="hidden md:block max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                <span class="text-2xl font-bold text-center">Volgende editie ReuzeLeuven op 21 mei 2022</span>
            </div>
            <intro-banner image="images/jeanke.png"/>
        </header>
        <main>
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

                <count-down to="2022-05-21 14:00:00"/>
                <rl-title />
                <div class="flex flex-col md:flex-row my-16">
                    <img src="/images/RLLogo.png" class="block w-2/3 lg:w-1/3 h-full mx-auto">
                    <div class="flex-col px-8">
                        <p class="text-4xl md:text-5xl font-extrabold my-4 text-gray-700">U bent welkom</p>
                        <p class="text-2xl md:text-3xl font-extrabold my-4">Zaterdag 21 mei - 14u</p>
                        <p class="text-xl md:text-2xl font-extrabold mt-4">In de historische binnenstad van Leuven</p>
                        <p>De reuzenoptocht vertrekt om 14 uur op het <strong>Martelarenplein</strong>. Eindhalte op het Wereldfeest in het <strong>Bruulpark</strong>.</p>
                        <p>U bent van harte uitgenodigd langsheen het parcours mee te dansen met de reuzen</p>
                    </div>
                </div>
                <hr><div ref="reuzen"></div>
                <intro class="my-8 md:my-16"/>
                <hr><div ref="reuzen-in-leuven"></div>
                <reuzen-in-leuven :reuzen="reuzen" class="my-8 md:my-16"/>
                <hr><div ref="reuzenbier"></div>
                <reuzen-bier />
                <hr><div ref="contact"></div>
                <contact-form class="my-8 md:my-16"/>
                <hr>
                <partners class="my-8 md:my-16"/>


            </div>
        </main>
        <Link :href="route('home')" class="block w-full bg-red-500 text-white text-center">Reuzeleuven.be</Link>
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
    import CountDown from '@/ReuzeLeuven/CountDown.vue';
    import IntroBanner from '@/ReuzeLeuven/IntroBanner.vue';
    import Intro from '@/ReuzeLeuven/Intro.vue';
    import Partners from '@/ReuzeLeuven/Partners.vue';
    import RlTitle from '@/ReuzeLeuven/RlTitle.vue';
    import ReuzenInLeuven from '@/ReuzeLeuven/ReuzenInLeuven.vue';
    import ContactForm from '@/ReuzeLeuven/ContactForm.vue';
    import ReuzenBier from '@/ReuzeLeuven/ReuzenBier.vue';

    export default defineComponent({
        components: {
            Head,
            Link,
            JetApplicationMark,
            JetNavLink,
            JetResponsiveNavLink,
            CountDown,
            IntroBanner,
            Intro,
            Partners,
            RlTitle,
            ReuzenInLeuven,
            ContactForm,
            ReuzenBier,

        },

        data() {
            return {
                tijd : new Date,
                showingNavigationDropdown: false,
            }
        },

        props: {
            canLogin: Boolean,
            canRegister: Boolean,
            laravelVersion: String,
            phpVersion: String,
            reuzen: Array,
            tag: String,

        },
        mounted(){
            if(this.tag){
                var top = this.$refs[this.tag].offsetTop - this.$refs['nav'].offsetHeight;
                setTimeout(function(){window.scrollTo(0,top);},10);
            }
            else{
                console.log('no tag');
            }

        }
    })
</script>
