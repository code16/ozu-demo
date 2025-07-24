<header>
    <x-container>
        <header class="flex items-center justify-between py-10">
            <div>
                <a aria-label="TailwindBlog" href="/">
                    <div class="flex items-center justify-between">
                        <x-icon-logo class="h-32 w-32 text-gray-900 dark:text-gray-100" alt="Ozu" />
                    </div>
                </a>
            </div>
            <div class="flex items-center space-x-4 leading-5 sm:space-x-6">
                <a class="hidden font-medium text-gray-900 dark:text-gray-100 sm:block" href="{{ route('projects.index', absolute: false) }}">
                    Projects
                </a>
                <a class="hidden font-medium text-gray-900 dark:text-gray-100 sm:block" href="{{ route('about', absolute: false) }}">
                    The team
                </a>
                <a class="hidden font-medium text-gray-900 dark:text-gray-100 sm:block" href="{{ route('contact', absolute: false) }}">
                    Contact
                </a>
                <button aria-label="Toggle Dark Mode"
                    x-data="{ theme: localStorage.getItem('theme') || 'light' }"
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
            </div>
        </header>
    </x-container>
</header>
