

<section class="{{ $attributes['class'] ?? '' }}">
    <div class="container">
        @if($title ?? null)
            <h2 class="text-4xl font-bold leading-8 tracking-tight mb-8">{{ $title }}</h2>
        @endif
        {{ $slot }}
    </div>
</section>
