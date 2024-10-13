<?php

namespace App\Livewire\Proposals;

use App\Models\Project;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Livewire\Attributes\Rule;
use Livewire\Component;

class Create extends Component

{

  public Project $project;

  public bool $modal = false;

    #[Rule(['required', 'email'])]
    public string $email = '';

  #[Rule(['required', 'numeric', 'min:1'])]
    public int $hours = 0;

    public bool $agree = false;

    public function save(): void
    {

      $this->validate();

      if (!$this->agree) {
        $this->addError('agree', 'Você precisa concordar com os termos de uso');

        return;
      }

//Os atributos serão usados para verificar se o registro existe no db para ser atualizado e os valores serão usados
// para adicionar no db.
      $this->project->proposals()
        ->updateOrCreate(
          ['email' => $this->email],
          ['hours' => $this->hours]
        );

        $this->modal = false;

    }

    public function render(): View|Factory|Application
    {
        return view('livewire.proposals.create');
    }
}
