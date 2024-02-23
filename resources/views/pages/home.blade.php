

<x-layout>
    <div class="relative flex items-center overflow-hidden h-[calc(100vh-2rem)] p-12">
        <img class="absolute inset-0 w-full h-full object-cover" src="{{ asset('/img/hero.avif') }}" role="presentation" alt="">
        <div class="absolute inset-0 from-black/40 to-black/0  bg-gradient-to-r"></div>
        <div class="relative text-9xl uppercase font-bold text-white">
            The best<br><em>Whatever</em><br>in town
        </div>
    </div>
    <div class="p-12">
        <x-section>
            <div class="grid grid-cols-2 gap-4">
                <x-kpi>
                    We get stuff done
                </x-kpi>
                <x-kpi>
                    We can continue this list forever
                </x-kpi>
                <x-kpi>
                    And we do this also
                </x-kpi>
                <x-kpi>
                    This is not the last item
                </x-kpi>
                <x-kpi>
                    And event this (yeah)
                </x-kpi>
                <x-kpi>
                    Ok I think we all get the point
                </x-kpi>
            </div>
        </x-section>
        <x-section>
            <x-slot:title>
                Featuring projects
            </x-slot:title>
            <div class="grid md:grid-cols-3 gap-8">
                @foreach($projects as $project)
                    <x-project-item :project="$project" />
                @endforeach
            </div>
            <div class="text-center">
                <a href="{{ route('projects.index') }}">
                    Browser projects
                </a>
            </div>
        </x-section>
        <x-section>
            <div>
                <a href="{{ route('contact') }}">Contact</a>
            </div>
            <div>
                <a href="{{ route('team') }}">Team</a>
            </div>
        </x-section>
    </div>
</x-layout>
