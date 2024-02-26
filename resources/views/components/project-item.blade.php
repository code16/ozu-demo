@props([
    /** @var \App\Models\Project $project */
    'project',
])

<div class="h-full  overflow-hidden rounded-md border-2 border-gray-200 border-opacity-60 dark:border-gray-700">
    <a href="{{ $project->url }}" >
        <img class="object-cover object-center md:h-36 lg:h-48 w-full" src="{{ $project->cover->thumbnail(250) }}" alt="Sunset in the mountains">
    </a>
    <div class="p-6">
        <h2 class="mb-3 text-2xl font-bold leading-8 tracking-tight">
            <a href="{{ $project->url }}">
                {{ $project->title }}
            </a>
        </h2>
        <p class="prose mb-3 max-w-none text-gray-500 dark:text-gray-400">
            {{ $project->place }}, {{ $project->year }}
        </p>
        <x-link href="{{ $project->url }}">
            Learn more →
        </x-link>
    </div>
</div>
