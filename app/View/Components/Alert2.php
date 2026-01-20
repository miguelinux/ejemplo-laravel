<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Alert2 extends Component
{
    public $class;

    /**
     * Create a new component instance.
     */
    public function __construct($type = 'info')
    {

	switch($type) {
		case 'info':
			$class="info blabla";
			break;
		case 'warning':
			$class="warning blabla";
			break;
		default:
			$class="default blabla";
			break;
	}
	$this->class = $class;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.alert2');
    }
}
