<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;
use PDF;

class ImpController extends Controller
{
    //
    public function impresion()
    {
        $manco = Menu::all();
        return view('impresion',compact('manco'));
    }

    public function dowloadPDF()
    {
        $manco = Menu::all();
        $pdf = PDF::loadView('impresion',compact('manco'));
        return $pdf->download('libro.pdf');
    }
}
