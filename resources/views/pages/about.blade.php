

<x-layout>
    <x-layout.default>
        <x-slot:title>
            {!! $page->title !!}
        </x-slot:title>

        <x-content>
            <x-jocko-content>
                {!! $page->content !!}
            </x-jocko-content>
        </x-content>
    </x-layout.default>
</x-layout>
