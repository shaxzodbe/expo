<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\View\Component;

class EventSchedule extends Component
{
    public Collection $events;
    
    public function __construct(Collection $events)
    {
        $this->events = $events;
    }

    public function render(): View|Closure|string
    {
        return view('components.event-schedule');
    }
}
