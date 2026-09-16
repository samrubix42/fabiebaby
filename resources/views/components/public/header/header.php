<?php

use Livewire\Component;

new class extends Component
{
    public string $activeCategory = 'All';

    public int $cartCount = 0;

    public float $cartSubtotal = 0.0;

    public function selectCategory(string $category): void
    {
        $this->activeCategory = $category;
        $this->dispatch('set-category', category: $category);
    }

    public function openCart(): void
    {
        $this->dispatch('toggle-cart');
    }
};
