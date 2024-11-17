<x-layout>
    <x-breadcrumbs class="mb-4"
                   :links="['jobs' => route('jobs.index'), $job->title => '#']"></x-breadcrumbs>
    <x-job-card :job="$job"></x-job-card>
</x-layout>

