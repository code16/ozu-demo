
<x-layout>
    <x-section>
        @foreach($projects as $project)
            <x-project-item :project="$project"></x-project-item>
        @endforeach
    </x-section>
</x-layout>
