@props([
    /** @var \App\Models\Project $project */
    'project'
])


<div>
    <img src="{{ $project->cover->thumbnail(250) }}" alt="Sunset in the mountains">
    <div class="pt-4">
        <h3>
            {{ $project->title }}
        </h3>
        <p>
            {{ $project->place }}, {{ $project->year }}
        </p>
    </div>
</div>
