

<div class="divide-y divide-gray-200 dark:divide-gray-700">
    <div class="space-y-2 pb-8 pt-6 md:space-y-5">
        <h1 class="text-3xl font-extrabold leading-9 tracking-tight text-gray-900 dark:text-gray-100 sm:text-4xl sm:leading-10 md:text-6xl md:leading-14">
            {{ $title }}
        </h1>
        @if($subtitle ?? null)
            <div class="text-lg leading-7 text-gray-500 dark:text-gray-400">{{ $subtitle }}</div>
        @endif
    </div>
    <div class="container pt-12">
        <div class="prose max-w-none dark:prose-invert">
            {{ $slot }}
        </div>
    </div>
</div>
