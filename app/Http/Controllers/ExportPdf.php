<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;
class ExportPdf extends Controller
{
    //

    public function export(Request $request){

        // // $test = Konfirmasi::find($id);
        $input = $request->gambar;
        $data = [
            "gambar" => $input
        ];
        // return response()->json($input);
        view()->share('data',$data);

        $pdf = PDF::loadView('exportpdf',$data)->setPaper('A4');
        // // set_time_limit(1800);
        // // $pdf->set_option('isPhpEnabled', true);
        // return view('exportpdf');
        return $pdf->setWarnings(false)->save('design.pdf')->stream('download.pdf');
    }
}
