<?php

namespace App\Http\Controllers;
use App\Models\laravelcv;
use Illuminate\Http\Request;
use PDF;

class CvController extends Controller
{
    public function showCVs(){
        $laravelcv = Laravelcv::all();
        // dd(123);
        return view('alldata', compact('laravelcv'));
      }
      
    // Generate PDF
    public function createPDF() {
        // retreive all records from db
        $data = Laravelcv::all();
  
        // share data to view
        view()->share('laravelcv',$data);
        $pdf = PDF::loadView('pdf_view', $data);
  
        // download PDF file with download method
        return $pdf->download('pdf_file.pdf');
      }
  }