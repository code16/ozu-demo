

<x-layout>
    <x-layout.default>
        <x-slot:title>
            {!! $page->title !!}
        </x-slot:title>

        <x-content>
            {!! $page->content !!}
        </x-content>
    </x-layout.default>
</x-layout>
