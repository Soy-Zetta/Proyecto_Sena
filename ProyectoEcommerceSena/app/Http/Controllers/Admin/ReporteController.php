<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Compra;
use Dompdf\Dompdf;
use Dompdf\Options;
use Illuminate\Http\Request;

class ReporteController extends Controller
{
    // public function generarReporte($id)
    // {
    //     $compra = Compra::findOrFail($id);
    //     $detalleCompra = $compra->detallecompra;

    //     $data = [
    //         'compra' => $compra,
    //         'detalleCompra' => $detalleCompra
    //     ];

    //     // Cargar la vista y renderizarla como HTML
    //     $html = view('reporte.compra', $data)->render();

    //     // Crear una instancia de Dompdf con opciones personalizadas
    //     $options = new Options();
    //     $options->set('isRemoteEnabled', true);
    //     $dompdf = new Dompdf($options);

    //     // Cargar el HTML en Dompdf
    //     $dompdf->loadHtml($html);

    //     // Renderizar el PDF
    //     $dompdf->render();

    //     // Devolver el PDF como respuesta
    //     return $dompdf->stream('reporte_compra.pdf');
   // }
}