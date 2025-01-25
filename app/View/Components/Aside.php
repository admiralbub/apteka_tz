<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Contracts\Services\CategoryService\CategoryServiceInterface;
class Aside extends Component
{
    /**
     * Create a new component instance.
     */
    public $categories;
    public function __construct(CategoryServiceInterface $categories)
    {
        $this->categories = $categories->allCategoryList();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render()
    {
        return view('components.aside');
    }
}
