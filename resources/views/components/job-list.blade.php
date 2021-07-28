@props(['jobs' => []])

<div class="bg-white overflow-hidden sm:rounded-md">
    <ul class="divide-y">
        @foreach ($jobs as $job)
            <x-job-row style="background-color: {{ $job->background_color }}"></x-job-row>
        @endforeach
    </ul>
</div>
