<?php  
$pdf = new FPDF('P','mm','A4');
$pdf->addPage();

// Menampilkan Gambar (Logo)
$pdf->Image('./img/cart.jpg', 30, 5, 27, 24);

// Memberikan Spasi
$pdf->Cell(25);

// Menampilkan Nama Koperasi
$pdf->setFont('Times', 'B', 20);
$pdf->Cell(0, 5, 'KOPERASI MANIS BERSATU', 0, 1, 'C');

// Menampilkan Website dan Email
$pdf->setFont('Times', 'B', 10);
$pdf->Cell(0, 5, '  Website : WWW.HARUMBERSATU.COM / E-Mail : admin@harusbersatu.com', 0, 1, 'C');


// Menampilkan Alamat dan Telp/Fax
$pdf->Cell(25);
$pdf->Cell(0, 5, 'Banjarmasin Utara / Telp. / Fax : 0823xxxxxx / KOPERASIN HARUM MANIS BERSATU', 0, 1, 'C');

// Menambahkan Garis Pemisah
$pdf->SetlineWidth(1);
$pdf->Line(10, 36, 197, 36);
$pdf->SetlineWidth(0);
$pdf->Line(10, 37, 197, 37);

// Memberikan Spasi
$pdf->Cell(30, 17, '', 0, 1);
?>
