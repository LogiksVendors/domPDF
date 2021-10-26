<?php
if(!defined('ROOT')) exit('No direct script access allowed');

require __DIR__ .'/dompdf/vendor/autoload.php';

require_once __DIR__ . '/dompdf/lib/html5lib/Parser.php';
// require_once __DIR__ . '/dompdf/lib/php-font-lib/src/FontLib/Autoloader.php';
// require_once __DIR__ .'/dompdf/lib/php-svg-lib/src/autoload.php';
require_once __DIR__ .'/dompdf/src/Autoloader.php';
Dompdf\Autoloader::register();

use Dompdf\Dompdf;

function printPDF($templateHTML, $params = []) {
    // instantiate and use the dompdf class
    $dompdf = new Dompdf();
    $dompdf->loadHtml($templateHTML);
    
    // (Optional) Setup the paper size and orientation
    $dompdf->setPaper('A4', 'landscape');
    
    // Render the HTML as PDF
    $dompdf->render();
    
    // Output the generated PDF to Browser
    $dompdf->stream();
}


?>