
<x-layout>
    <x-layout.default>
        <x-slot:title>
            Our projects
        </x-slot:title>

        <x-slot:subtitle>
            Showcase of our monkey-driven projects.
        </x-slot:subtitle>

        <div class="pb-0 pt-0">
            <div class="grid md:grid-cols-2 gap-8">
                @foreach($projects as $project)
                    <x-project-item :project="$project"></x-project-item>
                @endforeach
            </div>
        </div>
        <div class="mt-8">
            {{ $projects->links() }}
        </div>
    </x-layout.default>
</x-layout>
