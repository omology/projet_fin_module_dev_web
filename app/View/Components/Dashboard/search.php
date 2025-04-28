<?php

namespace App\View\Components\Dashboard;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Models\Book;

class search extends Component
{


    /**
     * Create a new component instance.
     */
    public function __construct(
        public array  $categories 
    )
    {
        
    $this->categories = $categories ?? Book::$categories;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.dashboard.search');
    }
}
