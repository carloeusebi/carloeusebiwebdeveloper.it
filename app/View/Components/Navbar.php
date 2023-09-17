<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Navbar extends Component
{
    public array $navLinks = [
        ["name" => "jumbo", "label" => "Home", "icon" => "home", "solid" => true],
        ["name" => "about", "label" => "About", "icon" => "user"],
        ["name" => "resumee", "label" => "Resumee", "icon" => "file"],
        ["name" => "portfolio", "label" => "Portfolio", "icon" => "folder-tree", "solid" => true],
        ["name" => "contact", "label" => "Contact", "icon" => "envelope"]
    ];

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.navbar');
    }
}
