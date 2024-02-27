

<div class="flex items-center max-w-sm gap-6">
    <div class="shrink-0 aspect-square border rounded-full w-[60px] flex items-center justify-center bg-primary-50">
        <svg xmlns="http://www.w3.org/2000/svg" class="fill-current text-gray-700 dark:text-gray-200 h-6 w-6">
            @switch($icon ?? null)
                @case('plane') <path d="M19.5 10.5l-6-6-1.5 1.5 3.5 3.5H3v3h12.5l-3.5 3.5 1.5 1.5 6-6z"/> @break
                @case('lock') <path d="M12 2C8.13 2 5 5.13 5 9v3H3v10h18V12h-2V9c0-3.87-3.13-7-7-7zm-2 12H7v-2h3v2zm5 0h-3v-2h3v2z"/> @break
                @case('star') <path d="M12 2l2.29 7.06h7.43L14 11.54l2.29 7.06L12 14.97l-4.29 4.63L9 11.54 2.29 9.06h7.43z"/> @break
                @case('heart') <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"/> @break
                @case('user') <path d="M12 12c2.21 0 4-2.79 4-5s-1.79-5-4-5-4 2.79-4 5 1.79 5 4 5zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/> @break
                @case('new') <path d="M19 13h-6v6h-2v-6H5v-2h6V5h2v6h6v2z"/> @break
            @endswitch
        </svg>
    </div>
    <div class="flex-1 uppercase text-xl">
        {{ $slot }}
    </div>
</div>
