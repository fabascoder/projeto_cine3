<?php
include 'vendor/autoload.php';
use BaconQrCode\Renderer\ImageRenderer;
use BaconQrCode\Renderer\Image\SvgImageBackEnd;
use BaconQrCode\Renderer\RendererStyle\RendererStyle;
use BaconQrCode\Writer;

use Dompdf\Options;
use Dompdf\Dompdf;

$tamanho = 250;
$margem  = 5;
$style = new RendererStyle($tamanho, $margem, null, null, null);
$renderer = new ImageRenderer($style, new SvgImageBackEnd());

$numero = str_pad(rand(1, 1000), 5, "0");

$writer = new Writer($renderer);
$svg = $writer->writeString('http://10.24.83.21/mail/valida.php?n='.$numero);
$html = '
<!DOCTYPE html>
<html>
<head>
    <title>PDF com QR Code</title>
</head>
<body>
    <main>
        <h1>Comprovante Nº '.$numero.'</h1>
        <div>
            Nome: Joao Silva<br>
            CPF: 12345678909
        </div>
        <div>
            Local: São Paulo Expo<br>
            Data do Evento: 15/11/2024 ás 08h
        </div>
    </main>
    <div>
        <img src="data:image/svg+xml;base64,' . base64_encode($svg) . '">
    </div>
</body>
</html>';
$options = new Options();
$options->set('defaultFont', 'Arial');
$dompdf = new Dompdf($options);
$dompdf->loadHtml($html);
$dompdf->setPaper('A4', 'portrait');
$dompdf->render();
$dompdf->stream("document.pdf", ["Attachment" => false]);
//echo $html;