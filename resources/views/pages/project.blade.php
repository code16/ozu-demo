

<x-layout>
    <x-layout.post>
        <x-slot:surtitle>
            {{ $project->place }}, {{ $project->year }}
        </x-slot:surtitle>

        <x-slot:title>
            {{ $project->title }}
        </x-slot:title>

        <x-slot:img src="{{ $project->cover->thumbnail(1024) }}">
        </x-slot:img>

        <x-slot:aside>
            <div class="divide-gray-200 text-sm font-medium leading-5 dark:divide-gray-700 xl:col-start-1 xl:row-start-2 xl:divide-y">
                <div class="flex justify-between py-4 xl:block xl:space-y-8 xl:py-8">
                    @if($previousProject)
                        <div>
                            <h2 class="text-xs uppercase tracking-wide text-gray-500 dark:text-gray-400">Previous Project</h2>
                            <x-link href="{{ $previousProject->url }}">
                                {{ $previousProject->title }}
                            </x-link>
                        </div>
                    @endif
                    @if($nextProject)
                        <div>
                            <h2 class="text-xs uppercase tracking-wide text-gray-500 dark:text-gray-400">Next Project</h2>
                            <x-link href="{{ $nextProject->url }}">
                                {{ $nextProject->title }}
                            </x-link>
                        </div>
                    @endif
                </div>
            </div>
            <div class="pt-4 xl:pt-8">
                <x-link href="{{ route('projects.index', absolute: false) }}">
                    ← Back to projects
                </x-link>
            </div>
        </x-slot:aside>

        <x-content>
            {!! $project->content !!}
        </x-content>

        @if(count($project->visuals))
            <div class="mt-12">
                <div class="grid sm:grid-cols-3 grid-cols-2 gap-4">
                    @foreach($project->visuals as $visual)
                        <img class="aspect-square" src="{{ $visual->thumbnail(400, fit: true) }}" alt="">
                    @endforeach
                </div>
            </div>
        @endif
    </x-layout.post>
</x-layout>
