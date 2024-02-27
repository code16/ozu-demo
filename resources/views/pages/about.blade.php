

<x-layout>
    <x-layout.default>
        <x-slot:title>
            {!! $page->title !!}
        </x-slot:title>

        @if($page->cover)
            <img src="{{ $page->cover->thumbnail(1024) }}" alt="{{ $page->title }}" class="w-full aspect-[2/1] object-cover">
        @endif

        <x-content>
            <x-jocko-content>
                {!! $page->content !!}
            </x-jocko-content>
        </x-content>
    </x-layout.default>
</x-layout>
