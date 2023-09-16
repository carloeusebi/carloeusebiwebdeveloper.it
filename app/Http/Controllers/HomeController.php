<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $navLinks = [
            ["name" => "jumbo", "label" => "Home", "icon" => "home", "solid" => true],
            ["name" => "about", "label" => "About", "icon" => "user"],
            ["name" => "resumee", "label" => "Resumee", "icon" => "file"],
            ["name" => "portfolio", "label" => "Portfolio", "icon" => "folder-tree", "solid" => true],
            ["name" => "contact", "label" => "Contact", "icon" => "envelope"]
        ];

        return view('home', compact('navLinks'));
    }
}
