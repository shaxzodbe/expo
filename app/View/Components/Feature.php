<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\View\Component;

class Feature extends Component
{
    public Collection $features;

    public function __construct(Collection $features)
    {
        $this->features = $features;
    }

    public function render(): View|Closure|string
    {
        return view('components.feature');
    }
}
