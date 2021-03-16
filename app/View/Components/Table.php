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
      [
        'name' => 'Палка',
        'audio' => '/storage/lesson/audio/gun3.mp3',
        'image' => '/storage/lesson/images/key2.gif',
        'meaning' => 'двигаться вперед и отступать, подвигаться назад'
      ],
      [
        'name' => 'Точка',
        'audio' => '/storage/lesson/audio/zhu3.mp3',
        'image' => '/storage/lesson/images/key3.gif',
        'meaning' => 'пламя светильника, точка, знак, символ'
      ],
      [
        'name' => 'Наоборот',
        'audio' => false,
        'image' => '/storage/lesson/images/key4.gif',
        'meaning' => 'напротив, наоборот, противоположность, противодействие'
      ],
      [
        'name' => 'Побег',
        'audio' => '/storage/lesson/audio/yi3.mp3',
        'image' => '/storage/lesson/images/key5.gif',
        'meaning' => '«побег», «редкостный, превосходный, изысканный», «ласточка»'
      ],
      [
        'name' => 'Крючок',
        'audio' => '/storage/lesson/audio/jue2.mp3',
        'image' => '/storage/lesson/images/key6.gif',
        'meaning' => '«крючок»'
      ],
      [
        'name' => 'Два',
        'audio' => '/storage/lesson/audio/er4.mp3',
        'image' => '/storage/lesson/images/key7.gif',
        'meaning' => '«два, во-вторых, второй, двоякий, двойной, двойственный, дважды, раздвоение, пара»'
      ],
      [
        'name' => 'Верхушка',
        'audio' => '/storage/lesson/audio/tou2.mp3',
        'image' => '/storage/lesson/images/key8.gif',
        'meaning' => '«верхушка, голова»'
      ],
      [
        'name' => 'Человек',
        'audio' => '/storage/lesson/audio/ren2.mp3',
        'image' => '/storage/lesson/images/key9.gif',
        'meaning' => '«человечество, род человеческий», «каждый человек, люди», «взрослый, солидный, персона», «человек, уроженец данной области, государства», «работник, рабочие руки», «лучшие стороны человеческой натуры, таланты, способности, достоинство, честь», «человеческий труд, сделанное руками человека».'
      ],
      [
        'name' => 'Шагающий человек',
        'audio' => '/storage/lesson/audio/er2.mp3',
        'image' => '/storage/lesson/images/key10.gif',
        'meaning' => '«человек», «шагающий человек»'
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
