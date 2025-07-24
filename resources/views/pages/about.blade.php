

<x-layout>
    <x-layout.default>
        <x-slot:title>
            {!! $page->title !!}
        </x-slot:title>

        @if($page->cover)
            <img src="{{ $page->cover->thumbnail(1024) }}" alt="{{ $page->title }}" class="w-full aspect-[2/1] object-cover">
        @endif

        <x-ozu-content>
            <!-- Here: we encapsulate dynamic content inputted from the Ozu CMS to allow it to render correctly (such as editor embeds like videos, quotes, images...) -->
            {!! $page->content !!}
        </x-ozu-content>

    </x-layout.default>
</x-layout>
