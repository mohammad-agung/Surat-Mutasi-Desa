<?php
require_once("../assets/admin/vendor/fpdf/fpdf.php");
require_once("../model/tanggal/function_tanggal.php");
require_once("../controller/config.php");
date_default_timezone_set('Asia/Makassar');
class PDF extends FPDF
{
    // Page header
    function Header()
    {
        $array_bln    = array(1 => "I", "II", "III", "IV", "V", "VI", "VII", "VIII", "IX", "X", "XI", "XII");
        $bln        = $array_bln[date('n')];
        $thn = date('Y');

        $nomor_surat = "02/Sket/" . $bln . "/" . $thn;
        // Logo
        // $this->Image('../../assets/img/logo-jakbar.jpg', 20, 10);

        // Arial bold 15
        $this->SetFont('Times', 'B', 15);
        // Move to the right
        // $this->Cell(60);
        // Title

        $this->Cell(200, 8, 'PEMERINTAHAN DESA SANGGINORA', 0, 1, 'C');
        $this->Cell(200, 8, 'KECAMATAN POSO PESISIR SELATAN', 0, 1, 'C');
        $this->Cell(200, 8, 'POSO, SULAWESI TENGAH', 0, 1, 'C');

        // Line break
        $this->Ln(2);

        $this->SetFont('Times', 'BU', 12);
        for ($i = 0; $i < 10; $i++) {
            $this->Cell(308, 0, '', 1, 1, 'C');
        }
        $this->Ln(3);
        //Jenis Surat
        $this->SetFont('Times', '', 15);
        $this->Cell(0, 0, 'DATA MUTASI WARGA MASUK ', 0, 1, 'C');
        //Nomor Surat
        $this->SetFont('Times', '', 11);
        $this->Cell(0, 10, 'Nomor: ' . $nomor_surat, 0, 1, 'C');
        $this->Ln(10);
    }

    // Page footer
    function Footer()
    {
        // Position at 1.5 cm from bottom
        $this->SetY(-15);
        // Arial italic 8
        $this->SetFont('Arial', 'I', 8);
        // Page number
        $this->Cell(0, 10, 'Page ' . $this->PageNo() . '/{nb}', 0, 0, 'C');
    }
}
$tbl_arsip_datang = $_GET['id'];
$query = mysqli_query($conn, "SELECT tbl_arsip_datang.nama_pemohon,tbl_arsip_datang.tanggal_arsip,tbl_arsip_datang.status,tbl_arsip_datang.nomor_surat,tbl_arsip_datang.alamat_asal,tbl_arsip_datang.alamat_tujuan,tbl_arsip_datang.kelurahan_asal,tbl_arsip_datang.kelurahan_tujuan,tbl_arsip_datang.kecamatan_asal,tbl_arsip_datang.kecamatan_tujuan,tbl_arsip_datang.kota_asal,tbl_arsip_datang.kota_tujuan,tbl_arsip_datang.provinsi_asal,tbl_arsip_datang.provinsi_tujuan,tbl_admin.nama_user,tbl_datadatang.nik_pemohon,tbl_datadatang.id_datadatang FROM tbl_arsip_datang JOIN tbl_admin ON tbl_arsip_datang.id_petugas = tbl_admin.id_user JOIN tbl_datadatang ON tbl_arsip_datang.id_pemohon = tbl_datadatang.id_datadatang WHERE tbl_arsip_datang.id_arsip_datang = '$tbl_arsip_datang'");
$data_mutasi = array();
while ($row = mysqli_fetch_assoc($query)) {
    $data_mutasi[] = $row;
}
$date = date('Y-m-d');

$pdf = new PDF('P', 'mm', [210, 330]);
$pdf->AliasNbPages();
$pdf->AddPage();

// set font
$pdf->SetFont('Times', '', 11);

// set penomoran
$nomor = 1;
$pdf->cell(45, 7, 'Nomor Surat Pindah', 0, 0, 'L');
$pdf->cell(2, 7, ':', 0, 0, 'L');
$pdf->cell(150, 7, strtoupper($data_mutasi[0]['nomor_surat']), 0, 1, 'L');

$pdf->cell(45, 7, 'NIK Pemohon', 0, 0, 'L');
$pdf->cell(2, 7, ':', 0, 0, 'L');
$pdf->cell(150, 7, strtoupper($data_mutasi[0]['nik_pemohon']), 0, 1, 'L');

$pdf->cell(45, 7, 'Nama Pemohon', 0, 0, 'L');
$pdf->cell(2, 7, ':', 0, 0, 'L');
$pdf->cell(150, 7, strtoupper($data_mutasi[0]['nama_pemohon']), 0, 1, 'L');

$pdf->Cell(45, 7, 'Daerah Asal ', 0, 0, 'L');
$pdf->Cell(-155);
$pdf->Cell(45, 7, '', 0, 1, 'L');

$pdf->cell(45, 7, '      Alamat', 0, 0, 'L');
$pdf->cell(2, 7, ':', 0, 0, 'L');
$pdf->cell(150, 7, strtoupper($data_mutasi[0]['alamat_asal']), 0, 1, 'L');

$pdf->cell(45, 7, '      Desa/kelurahan', 0, 0, 'L');
$pdf->cell(2, 7, ':', 0, 0, 'L');
$pdf->cell(150, 7, strtoupper($data_mutasi[0]['kelurahan_asal']), 0, 1, 'L');

$pdf->cell(45, 7, '      Kecamatan', 0, 0, 'L');
$pdf->cell(2, 7, ':', 0, 0, 'L');
$pdf->cell(150, 7, strtoupper($data_mutasi[0]['kecamatan_asal']), 0, 1, 'L');

$pdf->cell(45, 7, '      Kabupaten/Kota', 0, 0, 'L');
$pdf->cell(2, 7, ':', 0, 0, 'L');
$pdf->cell(150, 7, strtoupper($data_mutasi[0]['kota_asal']), 0, 1, 'L');

$pdf->cell(45, 7, '      Provinsi', 0, 0, 'L');
$pdf->cell(2, 7, ':', 0, 0, 'L');
$pdf->cell(150, 7, strtoupper($data_mutasi[0]['provinsi_asal']), 0, 1, 'L');

$pdf->Cell(45, 7, 'Daerah Tujuan ', 0, 0, 'L');
$pdf->Cell(-155);
$pdf->Cell(45, 7, '', 0, 1, 'L');

$pdf->cell(45, 7, '      Alamat', 0, 0, 'L');
$pdf->cell(2, 7, ':', 0, 0, 'L');
$pdf->cell(150, 7, strtoupper($data_mutasi[0]['alamat_tujuan']), 0, 1, 'L');

$pdf->cell(45, 7, '      Desa/kelurahan', 0, 0, 'L');
$pdf->cell(2, 7, ':', 0, 0, 'L');
$pdf->cell(150, 7, strtoupper($data_mutasi[0]['kelurahan_tujuan']), 0, 1, 'L');

$pdf->cell(45, 7, '      Kecamatan', 0, 0, 'L');
$pdf->cell(2, 7, ':', 0, 0, 'L');
$pdf->cell(150, 7, strtoupper($data_mutasi[0]['kecamatan_tujuan']), 0, 1, 'L');

$pdf->cell(45, 7, '      Kabupaten/Kota', 0, 0, 'L');
$pdf->cell(2, 7, ':', 0, 0, 'L');
$pdf->cell(150, 7, strtoupper($data_mutasi[0]['kota_tujuan']), 0, 1, 'L');

$pdf->cell(45, 7, '      Provinsi', 0, 0, 'L');
$pdf->cell(2, 7, ':', 0, 0, 'L');
$pdf->cell(150, 7, strtoupper($data_mutasi[0]['provinsi_tujuan']), 0, 1, 'L');


$pdf->Cell(45, 7, 'Petugas Pelapor ', 0, 0, 'L');
$pdf->Cell(-155);
$pdf->Cell(45, 7, '', 0, 1, 'L');

$pdf->cell(45, 7, '      Nama Petugas', 0, 0, 'L');
$pdf->cell(2, 7, ':', 0, 0, 'L');
$pdf->cell(150, 7, strtoupper($data_mutasi[0]['nama_user']), 0, 1, 'L');

$pdf->Ln(30);
$pdf->Cell(134);
$pdf->Cell(0, 5, 'Sangginora, ' . TanggalInd(date('Y-m-d', strtotime($date))), 0, 0, 'C');

$pdf->Ln(8);
$pdf->Cell(134);
$pdf->Cell(0, 5, 'Dikeluarkan Oleh :', 0, 0, 'C');
$pdf->Ln(4);
$pdf->Cell(134);
$pdf->Cell(0, 5, 'Kepala Desa Sangginora', 0, 0, 'C');


$pdf->Ln(5);

$pdf->SetFont('Times', 'U', 11);
$pdf->Ln(30);
$pdf->Cell(134);
$pdf->Cell(0, 5, '                                  ', 0, 0, 'C');


$pdf->Output('Surat Datang ' . $data_mutasi[0]['nik_pemohon'] . ' ' . $date . '.pdf', 'I');
