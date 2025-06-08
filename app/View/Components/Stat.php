<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\View\Component;

class Stat extends Component
{
    public Collection $stats;
    
    public function __construct(Collection $stats)
    {
        $this->stats = $stats;
    }

    public function render(): View|Closure|string
    {
        return view('components.stat');
    }
}
