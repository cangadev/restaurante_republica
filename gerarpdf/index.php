<?php
require('../fpdf/fpdf.php');

// Simule dados vindos do banco de dados ou formulário
$cliente = urldecode($_GET['cliente']);
$data_reserva = $_GET['dat'];
$hora_reserva = $_GET['hora'];
$prato = urldecode($_GET['nome']);
$preco_unitario = $_GET['preco'];
$quantidade = $_GET['quantidade']; 
$lugares = $_GET['mesa'];

$total = $preco_unitario * $quantidade;

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);

$pdf->Cell(0,10,'RESTAURANTE A REPUBLICA',0,1,'C');
$pdf->Cell(0,10,'Fatura de Reserva',0,1,'C');
$pdf->Ln(10);

$pdf->SetFont('Arial','',12);
$pdf->Cell(0,10,"Cliente: $cliente",0,1);
$pdf->Cell(0,10,"Data da Reserva: $data_reserva",0,1);
$pdf->Cell(0,10,"Hora da Reserva: $hora_reserva",0,1);
$pdf->Cell(0,10,"Quantidade de Lugares: $lugares",0,1);
$pdf->Ln(5);

$pdf->Cell(0,10,"Prato: $prato",0,1);
$pdf->Cell(0,10,"Quantidade: $quantidade",0,1);
$pdf->Cell(0,10,"Preco Unitario: KZ " . number_format($preco_unitario, 2, ',', '.'),0,1);
$pdf->Ln(5);
$pdf->SetFont('Arial','B',12);
$pdf->Cell(0,10,"Total: KZ " . number_format($total, 2, ',', '.'),0,1);

$pdf->Output('I', 'fatura_reserva.pdf'); // 'I' abre no navegador. Use 'D' para forçar o download.
?>
