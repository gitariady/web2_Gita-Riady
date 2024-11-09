<?php  
        $pdf = new FPDF('P','mm','A4');
        $pdf->addPage();
        $pdf->setFont('Times','B',18);
        $pdf->Image('./img/cart.jpg', 30, 5, 27, 24);
        $pdf->Cell(25);
        $pdf->setFont('Times','B',20);
        $pdf->Cell(0,5,'KOPERASI MANIS BERSATU',0,1,'C');
        $pdf->Cell(25);
        $pdf->setFont('Times','B',10);
        $pdf->Cell(0,5,'Website : WWW.HARUMBERSATU.COM'.'/E-Mail : '.'admin@harusbersatu.com',0,1,'C');
        $pdf->Cell(25);
        $pdf->setFont('Times','B',10);
        $pdf->Cell(0,5,'Banjarmasin Utara'.'/Telp. / Fax : '.'0823xxxxxx'.'/'.'KOPERASIN HARUM MANIS BERSATU',0,1,'C');

        $pdf->SetlineWidth(1);
        $pdf->Line(10,36,197,36,);
        $pdf->SetlineWidth(0);
        $pdf->Line(10,37,197,37,);
        $pdf->Cell(30,17,'',0,1);

        $pdf->setFont('Times','B',10);
    $pdf->Output('report_header_only.pdf','I');