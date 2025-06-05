<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\View\Component;

class Banner extends Component
{
    public Collection $slides;

    public function __construct(Collection $slides)
    {
        $this->slides = $slides;
    }

    public function render(): View|Closure|string
    {
        return view('components.banner');
    }
}
