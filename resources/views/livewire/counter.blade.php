<div>
 <div class="container">
    <div class=" mt-5">
        <div class="container d-flex align-item-center gap-3 justify-content-center">
            <button class="btn btn-danger"wire:click="resetCounter">0</button>
            <button class="btn btn-danger" wire:click="decrement">-1</button>
            <span>{{ $count }}</span>
            <button class="btn btn-success" wire:click="increment">+ 1</button>
            <button class="btn btn-success" wire:click="increment30(30)">+ 30</button>
            <button class="btn btn-success" wire:click="decrement30(30)">- 30</button>

        </div>

    </div>

 </div>
</div>
