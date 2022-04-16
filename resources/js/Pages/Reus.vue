<template>
    <Head title="ReuzeLeuven" />

    <div class="min-h-screen bg-gray-100 dark:bg-gray-300">
        <nav class="w-full max-h-48 bg-red-500 fixed top-0 text-white z-40">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between ">
                    <div class="flex justify-between w-full">
                        <div class="shrink-0 flex flex-row items-center  m-3">
                            <jet-application-mark class="block h-20 sm:h-24 w-20 sm:w-24 hover:h-40 hover:w-40" />
                            <div class=" text-base text-center md:text-left md:text-3xl font-extrabold ml-8">ReuzeLeuven 2022</div>
                        </div>
                        <div class="hidden space-x-8 sm:-my-px sm:ml-10 md:flex justify-end">
                            <jet-nav-link :href="route('dashboard')" :active="route().current('dashboard')">
                                <strong>Reuzen</strong>
                            </jet-nav-link>
                            <jet-nav-link :href="route('dashboard')" :active="route().current('dashboard')">
                                <strong>Reuzen in Leuven</strong>
                            </jet-nav-link>
                            <jet-nav-link :href="route('dashboard')" :active="route().current('dashboard')">
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
                    <jet-responsive-nav-link :href="route('dashboard')" :active="route().current('dashboard')">
                        ReuzeLeuven 2022
                    </jet-responsive-nav-link>
                    <jet-responsive-nav-link :href="route('dashboard')" :active="route().current('dashboard')">
                        Reuzen in Leuven
                    </jet-responsive-nav-link>
                </div>
            </div>
        </nav>
        <header class="bg-white shadow mt-28 ">
            <intro-banner />
        </header>
        <main>
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

                <rl-title />
                {{reus}}
                <intro />
                <reuzen-in-leuven :reuzen="reuzen" />
                <partners />


            </div>
        </main>
    </div>
</template>
<script>
import { defineComponent } from 'vue'

export default defineComponent({
    props: [
        'reuzen',
        'reus',
    ],
    data() {
        return{
            current : this.active,
        }
    }
})
</script>

