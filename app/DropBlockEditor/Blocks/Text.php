<?php

namespace App\DropBlockEditor\Blocks;

use Jeffreyvr\DropBlockEditor\Blocks\Block;

class Text extends Block
{
    public string $title = 'Text';

    public array $data = [
        'title' => 'Nice H1 dude 🔥',
    ];

    public string $blockEditComponent = 'text';

    public function render()
    {
        return <<<'blade'
            <h1 class="mx-auto my-4 max-w-screen-md text-center text-5xl font-extrabold">{{ $title }}</h1>
        blade;
    }
}
