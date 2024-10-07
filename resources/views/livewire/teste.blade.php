<div>
    <h1>Meu componente LiveWire</h1>
    <input wire:model.live="search" />
    <br>

    <ul>
        @forEach( $users as $user)
        <li>{{ $user->name }}</li>
        @endForeach
    </ul>
</div>
