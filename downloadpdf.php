<?php
ob_start();

require  'config/config.php';
require 'fpdf182/fpdf.php';
// New object created and constructor invoked 

$pdf = new FPDF(); 
$pdf->AddPage(); 
// Set font format and font-size 
$pdf->SetFont('Times', 'B', 7); 



$pdf->Cell(25,7,"Option#");
$pdf->Cell(25,7,"Type");
$pdf->Cell(35,7,"Name");
$pdf->Cell(25,7,"Cost");
$pdf->Cell(25,7,"Option Hrs");
$pdf->Cell(25,7,"Weight");
$pdf->Cell(25,7,"content");
$pdf->Cell(25,7,"techtalk");

$pdf->Ln();
$pdf->Cell(400,7,"---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------");
$pdf->Ln(); 
    
        $db = getDbInstance();

        $select = array('id', 'type', 'name', 'cost', 'hrs', 'weight', 'content','techtalk');
        // $rows = $db->arraybuilder('customers',$select);
        // echo $rows;
        $res=$db->get ('customers', null, $select);
        if ($db->count > 0)
            foreach ($res as $ress) {
             $id = $ress[id];
             $type = $ress[type];
             $name = $ress[name];
             $cost = $ress[cost];
             $hrs = $ress[hrs];
             $weight = $ress[weight];
             $content = $ress[content];
             $techtalk = $ress[techtalk];
             $pdf->Cell(25,7,$id);
             $pdf->Cell(25,7,$type);
             $pdf->Cell(35,7,$name);
             $pdf->Cell(25,7,$cost);
             $pdf->Cell(25,7,$hrs);
             $pdf->Cell(25,7,$weight); 
             $pdf->Cell(25,7,$content);
             $pdf->Cell(25,7,$techtalk);
             $pdf->Ln(); 
            }
error_reporting(0);
        
$pdf->Output(F,'/var/www/html/task/adminpanel/filename.pdf');
ob_end_flush();
// Close document and sent to the browser 
//$pdf->Output();
?>