@props([
    'url',
    'legend' => null,
])
<div>
    <x-embed-video
        :url="$url"
        class="max-w-md w-full aspect-video my-2"
        :autoplay="false"
    />
    {{-- Here: we published the ozu views to add our styling to some specific components (here the embedded videos) --}}
    @if($legend)
        <p>{{$legend}}</p>
    @endif
</div>
