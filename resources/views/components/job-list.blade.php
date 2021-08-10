@props(['jobs' => []])

<div class="bg-white overflow-hidden">
    <ul class="divide-y">
        @foreach ($jobs as $job)
            <x-job-row :job='$job' style="background-color: {{ $job->background_color }}"></x-job-row>
        @endforeach
    </ul>
</div>
