<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PdfController extends Controller
{

    public function index($id){ //este metodo solamente selecciona el reporte en base a la URL
        $pdf = \App::make('dompdf.wrapper');//crear un documento pdf
  
    switch ($id) {
        case 1:
            $view=$this->reporte1();       
        $pdf->loadHTML($view);//cargar la vista al documento pdf
        return $pdf->stream('reporte1');//cargar la vista al documento que se acaba de crear
        case 2:
              $view=$this->reporte2();       
        $pdf->loadHTML($view);
        return $pdf->stream('reporte2');
        case 3:
                $view=$this->reporte3();       
        $pdf->loadHTML($view);
        return $pdf->stream('reporte3');
        
        default:
         
            break;
    }}
        
        


    public function reporte1(){
        $data = $this->getData();// esto es un ejemplo de que se puede ir a traer a la base de datos
        $date = date('Y-m-d');//las fechas son importantes
        $invoice = "2222";//una variable adicional
        $view =  \View::make('pdf.reporte1', compact('data', 'date', 'invoice'))->render();//renderizar la vista html
        return $view;     



    }
      public function reporte2(){
       $data = $this->getData();
        $date = date('Y-m-d');
        $invoice = "2222";
        $view =  \View::make('pdf.reporte2', compact('data', 'date', 'invoice'))->render();
        return $view;  


        
    }
      public function reporte3(){
         $data = $this->getData();
        $date = date('Y-m-d');
        $invoice = "2222";
        $view =  \View::make('pdf.reporte3', compact('data', 'date', 'invoice'))->render();
        return $view;  



        
    }

    public function getData() 
    {
        $data =  [
            'quantity'      => '1' ,
            'description'   => 'some ramdom text',
            'price'   => '500',
            'total'     => '500'
        ];
        return $data;
    }
}
