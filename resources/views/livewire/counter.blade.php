<?php

use function Livewire\Volt\{state};

state(['count' => 0]);

$increment = fn() => $this->count++;
$decrement = fn() => $this->count--;
?>

<div class="flex items-center gap-4 text-xl">
    <button class="px-2 py-1 border rounded bg-gray-50" wire:click="decrement">-</button>
    <p class="tabular-nums">{{ $count }}</p>
    <button class="px-2 py-1 border rounded bg-gray-50" wire:click="increment">+</button>
</div>
