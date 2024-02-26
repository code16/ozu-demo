

<a class="text-base font-medium leading-6 text-primary-700 hover:text-primary-800 dark:text-primary-500 dark:hover:text-primary-400 {{ $attributes['class'] ?? '' }}"
    {{ $attributes->except('class') }}
>
    {{ $slot }}
</a>
