@props([
    'quote',
    'author' => null,
])
<blockquote class="my-6 font-normal not-italic pl-4 border-l-4 border-l-lime-400 max-w-fit">
    <x-tabler-quote-f class="-scale-x-100"/>
   {{$quote}}
    @if($author)
        <cite class="block text-end flex gap-1.5 items-center justify-end me-1">
            <b>{{$author}}</b>
        </cite>
    @endif
</blockquote>
