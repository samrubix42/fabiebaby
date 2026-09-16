<?php

use Livewire\Component;

new class extends Component
{
    public function selectCategory(string $category): void
    {
        $this->dispatch('set-category', category: $category);
    }
};
