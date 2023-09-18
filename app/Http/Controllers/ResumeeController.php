<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade\Pdf as PDF;
use Illuminate\Http\Request;

class ResumeeController extends Controller
{
    public function index()
    {
        return view('resumee');
    }


    public function createPDF()
    {
        $cssFile = glob(public_path('/build/assets/resumee*.css'))[0];
        $cssString = file_get_contents($cssFile);

        $pdf = PDF::loadView('resumee', compact('cssString'));

        return $pdf->stream('Carlo Eusebi.pdf');
    }
}
