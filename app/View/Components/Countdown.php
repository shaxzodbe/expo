<?php

namespace App\View\Components;

use App\Models\Countdown as CountdownData;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Countdown extends Component
{
    public CountdownData $countdown;
    
    public function __construct(CountdownData $countdown)
    {
        $this->countdown = $countdown;
    }

    public function render(): View|Closure|string
    {
        return view('components.countdown');
    }
}
