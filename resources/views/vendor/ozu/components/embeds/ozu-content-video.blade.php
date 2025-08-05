@props([
    'url',
    'legend' => null,
])
<figure>
    <x-embed-video class="max-w-md w-full aspect-video my-2" :url="$url" />

    @if($legend)
        <figcaption>
            {{ $legend }}
        </figcaption>
    @endif
</figure>
