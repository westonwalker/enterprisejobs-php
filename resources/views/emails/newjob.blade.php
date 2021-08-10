<div>
    <h1>🚀 New Dotnet Job!</h1>
    <p>Title: {{ $newJob->title }}</p>
    <p>Company: {{ $newJob->company_name }}</p>
    <p>Industry: {{ $newJob->company_type }}</p>
    <p>Location: {{ $newJob->location }}</p>
    <p>Tech: {{ $newJob->tags }}</p>

    <p>Link: <a href="{{ $newJob->url }}" target="_blank">See More</p>
</div>
