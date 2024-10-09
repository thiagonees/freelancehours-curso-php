<div>

    @foreach($this->projects as $project)

    <li>
        <a href="{{ route('projects.show', $project) }}">
            {{ $project->id }}. {{ $project->title }}

        </a>
    </li>

    @endForeach
</div>
