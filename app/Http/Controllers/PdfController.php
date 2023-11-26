<?php

namespace App\Http\Controllers;

use App\Models\Artista;
use Dompdf\Dompdf;
use Illuminate\Support\Facades\View;
use Illuminate\Http\Request;

class PdfController extends Controller
{
    public function generatePDF()
    {
        
        $data = Artista::all();

        // Renderiza a view para HTML
        $html = View::make('site.pdf.pdf', compact('data'))->render();

        $pdf = new Dompdf();

        // Carrega o HTML renderizado no Dompdf
        $pdf->loadHtml($html);

        // Renderiza o PDF
        $pdf->render();

        // Retorna o PDF para download ou visualização no navegador
        return $pdf->stream('relatorio.pdf');

    }
}
