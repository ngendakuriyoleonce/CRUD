<?php

namespace App\Http\Controllers;

use App\Models\employee;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class PdfController extends Controller
{
     public function generate()
    {
        $employes =employee::all();

        $pdf =Pdf::loadView('pdf.pdf', compact('employes'));

        return $pdf->stream('employes.pdf');
}
}