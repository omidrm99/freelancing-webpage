<x-layout>
    <x-nav-bar></x-nav-bar>
    @foreach($jobs as $job)
        <x-job-card class="mb-2" :job="$job">
            <div>
                <x-link-button :href="route('jobs.show', $job)">
                    Show
                </x-link-button>
            </div>
        </x-job-card>
    @endforeach
</x-layout>
