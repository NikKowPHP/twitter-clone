<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Card extends Component
{
    public $tweet;
    public $user;
    public $isRetweeted;

    /**
     * Create a new component instance.
     */
    public function __construct($tweet, $user, $isRetweeted= false)
    {

        $this->tweet = $tweet;
        $this->user = $user;
        $this->isRetweeted = $isRetweeted;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.card');
    }
}
