<?php

require '../lib/extenso/lib/Extenso.php';
require '../vendor/autoload.php';

use phputil\extenso\Extenso;
use Dompdf\Dompdf;

#armazena os valores dos inputs do formulário
$request  = $_REQUEST;

$amount_origin = $request['amount'];
$request['amount'] = str_replace(',', '.', $request['amount']);

$convert = new Extenso();
$request['amount_ext'] = $convert->extenso( $request['amount'] );

/**
 * Outros exemplos do uso da classe
 * $e->extenso( 1001, Extenso::MOEDA ) // mil e um reais
 * $e->extenso( 1001, Extenso::NUMERO_MASCULINO ); // mil e um
 * $e->extenso( 1001, Extenso::NUMERO_FEMININO ); // mil e uma
 */

return pdf($request);

function pdf($request){
    // instantiate and use the dompdf class
    $dompdf = new Dompdf();
    $dompdf->loadHtml(mountLayout($request));

    // (Optional) Setup the paper size and orientation
    $dompdf->setPaper('A4', 'landscape');

    // Render the HTML as PDF
    $dompdf->render();

    // Output the generated PDF to Browser
    $dompdf->stream();
}

function mountLayout($request){
    return "
    <style>
        div{
            width: 80%;
            margin: auto;
        }
        h1{
            text-align: center;
        }
        p{
            text_align: justify;
        }
    </style>
    <div>
        <h1>Comprovante de (Recibo)</h1>
        <hr>
        <p>Recebi(emos) de <strong>" . strtoupper($request['name']) . "</strong>" . 
        " a quantia de <strong>R$ {$request['amount']} ( " . strtoupper($request['amount_ext']) . " )</strong>" . "
        em <strong>" . strtoupper($request['payment_form']) . "</strong> " . 
        "referente a(o) <strong> " . strtoupper($request['description']) . "</strong> ao qual dou total e plena quitação</p>
    </div>
    <div>
        <h1>Comprovante de (Recibo)</h1>
        <hr>
        <p>Recebi(emos) de <strong>" . strtoupper($request['name']) . "</strong>" . 
        " a quantia de <strong>R$ {$request['amount']} ( " . strtoupper($request['amount_ext']) . " )</strong>" . "
        em <strong>" . strtoupper($request['payment_form']) . "</strong> " . 
        "referente a(o) <strong> " . strtoupper($request['description']) . "</strong> ao qual dou total e plena quitação</p>
    </div>";
}
