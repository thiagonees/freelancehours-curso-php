<?php

namespace App\Livewire\Projects;

use App\Models\Project;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Livewire\Component;

class Proposals extends Component
{
    public Project $project;

    public function render(): View|Factory|Application
    {
        return view('livewire.projects.proposals');
    }
}
