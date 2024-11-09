<?php
$pdf->setFont('Times', 'B', 14);
$pdf->Cell(0, 5, 'LAPORAN DATA KUSTOMER', 0, 1, 'C');
$pdf->Cell(30, 8, '', 0, 1);

// Menampilkan Header Tabel
$pdf->setFont('Times', 'B', 9);
$pdf->Cell(7, 6, 'NO', 1, 0, 'C');
$pdf->Cell(37, 6, 'NIK', 1, 0, 'C');
$pdf->Cell(37, 6, 'NAMA KUSTOMER', 1, 0, 'C');
$pdf->Cell(30, 6, 'TELP', 1, 0, 'C');
$pdf->Cell(45, 6, 'ALAMAT', 1, 1, 'C');

// Menampilkan Data Kustomer dari Database
$i = 1;
$data = $this->db->get('kustomer')->result_array();
foreach ($data as $d) {
    $pdf->setFont('Times', '', 9);
    $pdf->Cell(7, 6, $i++, 1, 0);
    $pdf->Cell(37, 6, $d['nik'], 1, 0);
    $pdf->Cell(37, 6, $d['name'], 1, 0);
    $pdf->Cell(30, 6, $d['telp'], 1, 0);
    $pdf->Cell(45, 6, $d['alamat'], 1, 1);
}// Output PDF
$pdf->setFont('Times', '', 10);
$pdf->Output('laporan_kustomerfull.pdf', 'I');
?>
