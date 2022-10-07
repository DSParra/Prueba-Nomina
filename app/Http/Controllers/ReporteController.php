<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Codedge\Fpdf\Fpdf\Fpdf;
use \App\Models\Empleado;

class ReporteController extends Controller
{
    
    public function index(){

        $nominas = Empleado::all()->where('isActive',1);        
        return view('reporte.index',compact('nominas'));


/*         $pdf = new Fpdf('p','mm','A4');
        $pdf->addpage();
        $pdf->SetFont('Courier','',12);
        $pdf->cell(188,6,'Nomina de empleados activos',1,1,'C');
        $pdf->cell(188,6,date('d-m-Y H:i'),1,1,'C');
        $pdf->Ln(3);
        $pdf->cell(10,5, 'Id',1,0,'C');
        $pdf->cell(65,5, 'Nombre',1,0,'C');
        $pdf->cell(40,5, 'Puesto ',1,0,'C');
        $pdf->cell(40,5, 'Sueldo Bruto ',1,0,'C');
        $pdf->cell(40,5, 'Sueldo Neto ',1,0,'C');
        $pdf->Ln();
        $nivel = 6;
        foreach ($nominas as $key => $nomina) {
            $pdf->cell(10,5, $nomina->id,1,0,'C');
            $pdf->cell(65,5, $nomina->nombre,1);
            $pdf->cell(40,5, $nomina->puesto -> nombre,1);
            $pdf->cell(40,5, '',1);
            $pdf->cell(40,5, '',1);
            $pdf->Ln();
        }
        $pdf->output('I','listado de laptops');
        dd($pdf);
        exit; */
        /* return null; */
    }

    



}
