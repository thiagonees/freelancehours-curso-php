<?php

namespace App\Livewire\Projects;

use App\Models\Project;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Livewire\Attributes\Computed;
use Livewire\Attributes\On;
use Livewire\Component;

class Proposals extends Component
{
  public Project $project;

  public int $qty = 5;
  #[Computed()]
  public function proposals(): LengthAwarePaginator
  {
    return $this->project->proposals()
      ->orderBy('hours')
      ->paginate($this->qty);
  }
  #[Computed()]
  public function lastProposalTime()
  {
    return $this->project->proposals()
      ->latest()->first()
      ->created_at->diffForHumans();
  }
  public function loadMore(): void
  {
    $this->qty += 5;
  }
  #[On('proposal::created')]


  public function render(): View|Factory|Application
  {
    return view('livewire.projects.proposals');
  }
}
