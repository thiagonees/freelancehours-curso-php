<x-layouts.app>
    <div class="grid grid-cols-3 gap-6">
        <livewire:projects.show :$project />

        <livewire:projects.proposals :$project />
        <livewire:proposals.create />
    </div>
</x-layouts.app>
