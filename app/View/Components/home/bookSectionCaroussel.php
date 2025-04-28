<?php

namespace App\View\Components\home;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Models\Book;

class bookSectionCaroussel extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct($books)
    {
        $this->books =$books;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.home.book-section-caroussel');
    }
}
