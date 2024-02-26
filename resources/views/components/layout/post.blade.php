<div class="xl:divide-y xl:divide-gray-200 xl:dark:divide-gray-700">
    <header class="pt-6 xl:pb-6">
        <div class="space-y-1 text-center">
            @if($surtitle)
                <p class="text-base font-medium leading-6 text-gray-500 dark:text-gray-400">
                    {{ $surtitle }}
                </p>
            @endif
            <div>
                <h1 class="text-3xl font-extrabold leading-9 tracking-tight text-gray-900 dark:text-gray-100 sm:text-4xl sm:leading-10 md:text-5xl md:leading-14">
                    {{ $title }}
                </h1>
            </div>
        </div>
        @if($img)
            <div class="mt-6">
                <img {{ $img->attributes->class('w-full aspect-[2/1] object-cover') }}>
            </div>
        @endif
    </header>
    <div class="grid-rows-[auto_1fr] divide-y divide-gray-200 pb-8 dark:divide-gray-700 xl:grid xl:grid-cols-4 xl:gap-x-6 xl:divide-y-0">
        <div></div>
{{--        <dl class="pb-10 pt-6 xl:border-b xl:border-gray-200 xl:pt-11 xl:dark:border-gray-700">--}}
{{--            <dt class="sr-only">Authors</dt>--}}
{{--            <dd>--}}

{{--            </dd>--}}
{{--        </dl>--}}
        <div class="divide-y divide-gray-200 dark:divide-gray-700 xl:col-span-3 xl:row-span-2 xl:pb-0">
            {{ $slot }}
        </div>
        <footer>
            {{ $aside }}
        </footer>
    </div>
</div>
