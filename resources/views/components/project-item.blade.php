@props([
    /** @var \App\Models\Project $project */
    'project',
])

@php $projectThumb = $project->thumb ?: $project->cover @endphp

<div class="h-full  overflow-hidden rounded-md border-2 border-gray-200 border-opacity-60 dark:border-gray-700">
    <a href="{{ $project->url }}" >
        <img class="object-cover object-center aspect-video my-0 w-full" src="{{ $projectThumb?->thumbnail(500) }}" alt="{{ $project->title }}">
    </a>
    <div class="p-6 pt-0">
        <h2 class="mb-3 mt-4 text-2xl font-bold leading-8 tracking-tight">
            <a href="{{ $project->url }}">
                {{ $project->title }}
            </a>
        </h2>
        <p class="prose mb-3 max-w-none text-gray-500 dark:text-gray-400">
            {{ $project->place }}, {{ $project->year }}
        </p>
        <x-link class="text-base font-medium leading-6" href="{{ $project->url }}">
            Learn more →
        </x-link>
    </div>
</div>
