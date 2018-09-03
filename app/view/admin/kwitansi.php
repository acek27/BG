<?php
require('/../../fpdf18/fpdf.php'); // file fpdf.php harus diincludekan
class PDF extends FPDF
{
    function Header()
    {
// setting properti font
        $this->SetFont('Arial', 'I', 10);
// menulis header
        $this->Cell(30, 15, 'Kuitansi Pembelian Sound System', 0, 0, 'L');
// membuat jarak terhadap cell sebelumnya
        $this->Cell(50);
// setting properti font
        $this->SetFont('Arial', 'B', 8);
        $this->Cell(30, 15, 'BG SOUND SYSTEM', 0, 0, 'L');
// membuat garis dari koordinat (11 mm, 18 mm) sampai koordinat (198
// mm,18 mm)
        $this->Line(0, 18, 198, 18);
// membuat space kosong antara header dengan teks konten
        $this->Ln(20);
    }

}

$pdf = new PDF('P', 'mm', array(125,150));
$pdf->SetMargins(4, 4, 3);
$title = 'Kuitansi Pembelian';
$pdf->SetTitle($title);
$pdf->AddPage();
$pdf->SetFont('Times', '', 10);
$pdf->MultiCell(0, 4, "
   Kuitansi diberikan kepada :

        Id_user                     : 	" . $data[0]['id_user'] . "
        Nama Lengkap        : 	" . $data[0]['nama'] . "
        Alamat                     : 	" . $data[0]['alamat'] . "
        Email                       : 	" . $data[0]['email'] . "
	");
$pdf->SetFont('Times', '', 9);
$pdf->MultiCell(0, 4, "
        Produk yang dibeli :
        Jenis                                       : 	" . $data[0]['jenis_sound'] . "
        Warna                                    : 	" . $data[0]['warna'] . "
        Daya                                      :	" . $data[0]['daya'] . "
        Kategori                                 :	" . $data[0]['kategori'] . "
        Harga                                     :	" . $data[0]['harga'] . "

    Hati-hati penipuan, pengiriman barang ini tidak dipungut biaya sepeserpun. ");

$pdf->SetFont('Times', '', 10);
$pdf->MultiCell(0, 5, "
                                                                           Jombang, ...........
                                                                           

                                                                         BG Sound System

.");
$pdf->Output();
?>