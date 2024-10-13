<?php

namespace App\Livewire\Projects;

use App\Models\Project;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Attributes\Computed;
use Livewire\Component;

class Index extends Component
{
    public function render(): \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application
    {
        return view('livewire.projects.index');
    }

    #[Computed()]
    public function projects(): Collection
    {
        return Project::query()->inRandomOrder()->get();
    }
}
