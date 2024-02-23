

<section class="p-12 {{ $attributes['class'] ?? '' }}">
    <div class="container mx-auto px-4">
        @if($title ?? null)
            <h2 class="text-center text-5xl uppercase">{{ $title }}</h2>
        @endif
        {{ $slot }}
    </div>
</section>
