

<x-layout>
{{--        <x-section>--}}
{{--            <div class="grid grid-cols-2 gap-4">--}}
{{--                <x-kpi>--}}
{{--                    We get stuff done--}}
{{--                </x-kpi>--}}
{{--                <x-kpi>--}}
{{--                    We can continue this list forever--}}
{{--                </x-kpi>--}}
{{--                <x-kpi>--}}
{{--                    And we do this also--}}
{{--                </x-kpi>--}}
{{--                <x-kpi>--}}
{{--                    This is not the last item--}}
{{--                </x-kpi>--}}
{{--                <x-kpi>--}}
{{--                    And event this (yeah)--}}
{{--                </x-kpi>--}}
{{--                <x-kpi>--}}
{{--                    Ok I think we all get the point--}}
{{--                </x-kpi>--}}
{{--            </div>--}}
{{--        </x-section>--}}
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
                <x-link href="{{ route('projects.index') }}">
                    Browse projects...
                </x-link>
            </div>
        </x-section>
</x-layout>
