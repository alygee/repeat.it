<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Table extends Component
{
    const ITEMS = [
      [
        'name' => 'Один',
        'audio' => '/storage/lesson/audio/yi1.mp3',
        'image' => '/storage/lesson/images/key1.gif',
        'meaning' => 'один, первый, во-первых, одинаковый, единый, единичный, каждый, отдельный, весь, сплошной, целый'
      ],
    ];

    public $items;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->items = self::ITEMS;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.table');
    }
}
