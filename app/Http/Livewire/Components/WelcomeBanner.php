<?php

namespace App\Http\Livewire\Components;

use Livewire\Component;

class WelcomeBanner extends Component
{
    public $message = 'Hello World!';

    public array $sliders;


    public function mount()
    {
        $items = [
            [
                'text' => 'Match and play Women’s Dresses',
                'img' => 'https://elyssi.redpixelthemes.com/assets/img/unlicensed/hero-slide-04.jpg',
                'img_mobile' => null,
                'url' => '#',
                'order' => 1
            ],
            [
                'text' => ' Elyssi New Men’s Outdoor Collection',
                'img' => 'https://elyssi.redpixelthemes.com/assets/img/unlicensed/hero-slide-03.jpg',
                'img_mobile' => null,
                'url' => '',
                'order' => 2
            ],
            [
                'text' => 'Blake by Elyssi',
                'img' => 'https://elyssi.redpixelthemes.com/assets/img/unlicensed/hero-slide-02.jpg',
                'img_mobile' => null,
                'url' => '',
                'order' => 3
            ],
        ];
        $this->sliders = collect($items)
            ->sortBy('order')
            ->reverse()
            ->toArray();
    }

    public function render()
    {
        return view('livewire.components.welcome-banner');
    }
}
