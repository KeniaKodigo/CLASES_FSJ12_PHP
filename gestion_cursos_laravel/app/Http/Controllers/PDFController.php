<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\Courses;

class PDFController extends Controller
{
    //generando reporte para todos los cursos
    public function getCursos(){
        //select * from courses
        $cursos = Courses::all();

        $pdf = PDF::loadview('PDF.Reporte', compact('cursos'));
        //return $pdf->download('cursos.pdf');
        return $pdf->stream('cursos.pdf');
    }
}
