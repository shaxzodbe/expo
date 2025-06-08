<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\View\Component;

class Speaker extends Component
{
    public Collection $speakers;
    
    public function __construct(Collection $speakers)
    {
        $this->speakers = $speakers;
    }

    public function render(): View|Closure|string
    {
        return view('components.speaker');
    }
}
