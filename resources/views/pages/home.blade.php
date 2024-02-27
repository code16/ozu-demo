

<x-layout>

    <div class="relative flex items-center overflow-hidden p-12">
        <img class="absolute inset-0 w-full h-full object-cover" src="{{ asset('/img/hero.jpg') }}" role="presentation" alt="Jocko, an Ozu demo project">
        <div class="absolute inset-0 from-black/30 to-black/0  bg-gradient-to-r"></div>
        <div class="absolute inset-0 from-black/40 to-black/0  bg-gradient-to-r"></div>
        <div class="relative text-4xl sm:text-6xl xl:text-8xl uppercase font-bold text-white py-12">
            The best<br><em>Whatever</em><br>in town
        </div>
    </div>

    <x-section class="mt-24 mb-24 px-12">
        <div class="grid sm:grid-cols-2 gap-4">
            <x-kpi icon="plane">
                We get stuff done
            </x-kpi>
            <x-kpi icon="lock">
                We can go on forever
            </x-kpi>
            <x-kpi icon="heart">
                And we do this also
            </x-kpi>
            <x-kpi icon="new">
                This is not the last item
            </x-kpi>
            <x-kpi icon="star">
                And even this
            </x-kpi>
            <x-kpi icon="user">
                Ok I think we are done
            </x-kpi>
        </div>
    </x-section>
    <x-section>
        <x-slot:title>
            Featuring projects
        </x-slot:title>
        <div class="grid md:grid-cols-2 gap-8">
            @foreach($projects as $project)
                <x-project-item :project="$project" />
            @endforeach
        </div>
        <div class="text-center mt-8">
            <x-link href="{{ route('projects.index', absolute: false) }}">
                Browse projects...
            </x-link>
        </div>
    </x-section>
</x-layout>
