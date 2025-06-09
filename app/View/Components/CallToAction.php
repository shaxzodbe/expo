<?php

namespace App\View\Components;

use App\Models\CallToAction as CallToActionData;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class CallToAction extends Component
{
    public CallToActionData $ctaMap;
    public CallToActionData $ctaJoin;

    public function __construct(CallToActionData $ctaMap, CallToActionData $ctaJoin)
    {
        $this->ctaMap = $ctaMap;
        $this->ctaJoin = $ctaJoin;
    }

    public function render(): View|Closure|string
    {
        return view('components.call-to-action');
    }
}
