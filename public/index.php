<?php
//Instrucciones para cargar el componente dompdf

// somewhere early in your project's loading, require the Composer autoloader
// see: http://getcomposer.org/doc/00-intro.md
require '../vendor/autoload.php';

// disable DOMPDF's internal autoloader if you are using Composer
define('DOMPDF_ENABLE_AUTOLOAD', false);

// include DOMPDF's default configuration
require_once '../vendor/dompdf/dompdf/dompdf_config.inc.php';

$html =
  '<html><body>'.
  '<h1>Titulo del PDF</h1>'.
  '<p>Aprendiendo a usar Composer</p>'.
  '</body></html>';

$dompdf = new DOMPDF();
$dompdf->load_html($html);
$dompdf->render();
$dompdf->stream("ejemplo.pdf");