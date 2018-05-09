<?php

require 'vendor/autoload.php';

use Spipu\Html2Pdf\Html2Pdf;
    

if (count($_GET) && $_GET['action'] == 'export') {
    exportToPdf('./boleto.html', 'boleto.pdf');
}

function exportToPdf($htmlPath, $file_name) {

    $htmlFile = fopen($htmlPath, "r") or die("Unable to open file!");
    $htmlContent = fread($htmlFile,filesize($htmlPath));
    fclose($htmlFile);  
    

    $html2pdf = new Html2Pdf('P', 'A4', 'en');
    $html2pdf->writeHTML($htmlContent);
    $html2pdf->output();
}
?>