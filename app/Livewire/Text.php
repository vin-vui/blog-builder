<?php

namespace App\Livewire;

use Jeffreyvr\DropBlockEditor\Components\BlockEditComponent;

class Text extends BlockEditComponent
{
    public function render()
    {
        return <<<'blade'
            <div class="space-y-4">
                <div>
                    <label for="title" class="mb-1">Title</label>
                    <input type="text" id="title" wire:model.live.debounce.500ms="data.title" class="w-full border border-gray-200 px-3 py-1 rounded-md">
                </div>
            </div>
        blade;
    }
}
