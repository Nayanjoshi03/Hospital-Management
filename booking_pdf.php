<?php
require_once __DIR__ . '/vendor/autoload.php';
// Create an instance of the class:
use Dompdf\Dompdf;
use Dompdf\Options;

function create_pdf($name, $email, $loc, $department, $time, $mode = 1)
{

    $dompdf = new Dompdf\Dompdf();
    ob_start();
    $html = ob_get_clean();
    $html = '<img src="images/banner.png" alt="banner" ><br>';
    $html .= '<div style="display:inline-block; font-size: x-large; border: 2px solid black; width: 300px; text-align: center; padding: 5px;">Name</div>';
    $html .= '<div style="display:inline-block; font-size: x-large; border: 2px solid black; width: 300px; text-align: center; padding: 5px;>' . $name . '</div><br>';
    $html .= '<div style="display:inline-block; font-size: x-large; border: 2px solid black; width: 300px; text-align: center; padding: 5px;">Email</div>';
    $html .= '<div style="display:inline-block;font-size: x-large; border: 2px solid black; width: 300px; text-align: center; padding: 5px;">' . $email . '</div><br>';
    $html .= '<div style="display:inline-block;font-size: x-large; border: 2px solid black; width: 300px; text-align: center; padding: 5px;">Location</div>';
    $html .= '<div style="display:inline-block;font-size: x-large; border: 2px solid black; width: 300px; text-align: center; padding: 5px;">' . $loc . '</div><br>';
    $html .= '<div style="display:inline-block;font-size: x-large; border: 2px solid black; width: 300px; text-align: center; padding: 5px;">Department</div>';
    $html .= '<div style="display:inline-block;font-size: x-large; border: 2px solid black; width: 300px; text-align: center; padding: 5px;">' . $department . '</div><br>';
    $html .= '<div style="display:inline-block;font-size: x-large; border: 2px solid black; width: 300px; text-align: center; padding: 5px;">Booking time</div>';
    $html .= '<div style="display:inline-block;font-size: x-large; border: 2px solid black; width: 300px; text-align: center; padding: 5px;">' . $time . '</div><br>';


    $dompdf->loadHtml($html);
    $dompdf->setPaper('A4', 'portrait');
    $dompdf->render();

    // Save the PDF to the server (optional)
    file_put_contents("pdf_files/{$name}_appointment.pdf", $dompdf->output());

    // Stream the PDF to the user
    $dompdf->stream("{$name}_appointment.pdf", ['Attachment' => $mode]);
    // if ($mode == 0) {
    //     $mpdf->stream("file.pdf", ["Attachment" => 0]);
    // } else {
    //     $mpdf->stream("file.pdf", ["Attachment" => 1]);
}