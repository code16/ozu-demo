<header>
    <x-container>
        <header class="flex items-center justify-between py-10">
            <div>
                <a aria-label="TailwindBlog" href="/">
                    <div class="flex items-center justify-between">
                        <img class="hidden h-12 invert dark:invert-0 sm:block" src="{{ asset('/img/logo.png') }}" alt="Jocko">
{{--                        <div class="mr-3">--}}
{{--                        </div>--}}
{{--                        <div class="hidden h-6 text-2xl font-semibold sm:block">Jocko</div>--}}
                    </div>
                </a>
            </div>
            <div class="flex items-center space-x-4 leading-5 sm:space-x-6">
{{--                <a class="hidden font-medium text-gray-900 dark:text-gray-100 sm:block" href="/blog">Blog</a>--}}
{{--                <a class="hidden font-medium text-gray-900 dark:text-gray-100 sm:block" href="/tags">Tags</a>--}}
                <a class="hidden font-medium text-gray-900 dark:text-gray-100 sm:block" href="{{ route('projects.index') }}">
                    Projects
                </a>
                <a class="hidden font-medium text-gray-900 dark:text-gray-100 sm:block" href="{{ route('about') }}">
                    The team
                </a>
                <a class="hidden font-medium text-gray-900 dark:text-gray-100 sm:block" href="{{ route('contact') }}">
                    Contact
                </a>
{{--                <button aria-label="Search">--}}
{{--                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6 text-gray-900 dark:text-gray-100">--}}
{{--                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z"></path>--}}
{{--                    </svg>--}}
{{--                </button>--}}
                <button aria-label="Toggle Dark Mode"
                    x-data="{ theme: localStorage.getItem('theme') ?? 'light' }"
                    x-effect="() => {
                        localStorage.setItem('theme', theme);
                        document.documentElement.classList.toggle('light', theme === 'light');
                        document.documentElement.classList.toggle('dark', theme === 'dark');
                    }"
                    @click="theme = theme === 'dark' ? 'light' : 'dark'"
                >
                    <svg x-show="theme === 'light'" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="h-6 w-6 text-gray-900 dark:text-gray-100">
                        <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path>
                    </svg>
                    <svg x-cloak x-show="theme === 'dark'" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="h-6 w-6 text-gray-900 dark:text-gray-100">
                        <path d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z" fill-rule="evenodd" clip-rule="evenodd"></path>
                    </svg>
                </button>
{{--                <button aria-label="Toggle Menu" class="sm:hidden">--}}
{{--                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="h-8 w-8 text-gray-900 dark:text-gray-100">--}}
{{--                        <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path>--}}
{{--                    </svg>--}}
{{--                </button>--}}
{{--                <div class="fixed left-0 top-0 z-10 h-full w-full transform bg-white opacity-95 duration-300 ease-in-out dark:bg-gray-950 dark:opacity-[0.98] translate-x-full">--}}
{{--                    <div class="flex justify-end">--}}
{{--                        <button class="mr-8 mt-11 h-8 w-8" aria-label="Toggle Menu">--}}
{{--                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="text-gray-900 dark:text-gray-100">--}}
{{--                                <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>--}}
{{--                            </svg>--}}
{{--                        </button>--}}
{{--                    </div>--}}
{{--                    <nav class="fixed mt-8 h-full">--}}
{{--                        <div class="px-12 py-4">--}}
{{--                            <a class="text-2xl font-bold tracking-widest text-gray-900 dark:text-gray-100" href="/">Home</a>--}}
{{--                        </div>--}}
{{--                        <div class="px-12 py-4">--}}
{{--                            <a class="text-2xl font-bold tracking-widest text-gray-900 dark:text-gray-100" href="/blog">Blog</a>--}}
{{--                        </div>--}}
{{--                        <div class="px-12 py-4">--}}
{{--                            <a class="text-2xl font-bold tracking-widest text-gray-900 dark:text-gray-100" href="/tags">Tags</a>--}}
{{--                        </div>--}}
{{--                        <div class="px-12 py-4">--}}
{{--                            <a class="text-2xl font-bold tracking-widest text-gray-900 dark:text-gray-100" href="/projects">Projects</a>--}}
{{--                        </div>--}}
{{--                        <div class="px-12 py-4">--}}
{{--                            <a class="text-2xl font-bold tracking-widest text-gray-900 dark:text-gray-100" href="/about">About</a>--}}
{{--                        </div>--}}
{{--                    </nav>--}}
{{--                </div>--}}
            </div>
        </header>
    </x-container>
</header>
