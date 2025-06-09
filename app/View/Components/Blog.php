<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\View\Component;

class Blog extends Component
{
    public Collection $blogs;

    public function __construct(Collection $blogs)
    {
        $this->blogs = $blogs;
    }

    public function render(): View|Closure|string
    {
        return view('components.blog');
    }
}
