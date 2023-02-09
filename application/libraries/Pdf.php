<?php
defined('BASEPATH') OR exit('No direct script access allowed');


require 'vendor/autoload.php';
use Dompdf\Dompdf;


class Pdf
{
    function createPDF($html, $filename='', $download=TRUE, $paper='A4', $orientation='portrait'){
        $mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8', 'format' => 'A4']);
        $stylesheet = file_get_contents(base_url().'assets/dist/frontend/style.css'); // external css  
//$mpdf->WriteHTML($stylesheet,1);
//$html = $html . '' . $image; 
$mpdf->WriteHTML($html);
$mpdf->Output();exit;
        $dompdf = new Dompdf;
        $dompdf->load_html($html);
        $dompdf->set_paper($paper, $orientation);
        $dompdf->render();
        if($download)
            $dompdf->stream($filename.'.pdf', array('Attachment' => 1));
        else
            $dompdf->stream($filename.'.pdf', array('Attachment' => 0));
    }
}
?>