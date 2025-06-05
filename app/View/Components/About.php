<?php

namespace App\View\Components;

use App\Models\About as AboutData;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class About extends Component
{
    public AboutData $about;

    public function __construct(AboutData $about)
    {
        $this->about = $about;
    }

    public function render(): View|Closure|string
    {
        return view('components.about');
    }
}
