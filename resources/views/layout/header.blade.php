<header class="shadow-md bg-white sticky top-0 z-50 header--top">
    <nav class="max-w-6xl mx-auto py-4 px-4 lg:px-0" x-data="{ open: false }">
        <div class="flex justify-between items-center">

            <a href="/">
                <img src="/images/gdg-mauritius-logo.svg" class="h-3.5 md:h-5" />
            </a>

            <div class="hidden md:block">
                <ul class="flex flex-row gap-4 text-sm">
                    <li
                        class="py-2 border-b-4 border-white hover:border-b-4 hover:border-green-600 hover:transition hover:ease-in-out duration-300"
                    >
                        <a href="/" class="uppercase">Home</a>
                    </li>
                    <li
                        class="py-2 border-b-4 border-white hover:border-b-4 hover:border-green-600 hover:transition hover:ease-in-out duration-300"
                    >
                        <a href="/#" class="uppercase">Agenda</a>
                    </li>
                    <li
                        class="py-2 border-b-4 border-white hover:border-b-4 hover:border-green-600 hover:transition hover:ease-in-out duration-300"
                    >
                        <a href="/#" class="uppercase">Speakers</a>
                    </li>

                    <li
                        class="py-2 border-b-4 border-white hover:border-b-4 hover:border-green-600 hover:transition hover:ease-in-out duration-300"
                    >
                        <a
                            href="https://gdg.community.dev/events/details/google-gdg-mauritius-presents-devfest-mauritius-2023/"
                            target="_blank"
                            rel="noreferrer"
                            class="uppercase"
                        >Register</a
                        >
                    </li>
                </ul>
            </div>

            <div class="md:hidden">
            <button class="text-xs text-green-500 font-bold uppercase lg:hidden" @click="open = !open">
						<span class="pt-0.5">
								<svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" :class="{ 'hidden' : open }" fill="none" viewBox="0 0 24 24" stroke="currentColor">
										<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 6h16M4 12h16M4 18h16" />
								</svg>
								<svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" :class="{ 'hidden' : !open }" fill="none" viewBox="0 0 24 24" stroke="currentColor">
										<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M6 18L18 6M6 6l12 12" />
								</svg>
						</span>
			</button>
            </div>
        </div>
    </nav>
</header>
