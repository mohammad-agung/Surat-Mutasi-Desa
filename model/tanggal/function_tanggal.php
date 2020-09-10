<?php
function TanggalInd($date1)
{
    $date1 = date('Y-m-d', strtotime($date1));
    if ($date1 == '0000-00-00')
        return 'Tanggal Kosong';

    $tgl1 = substr($date1, 8, 2);
    $bln1 = substr($date1, 5, 2);
    $thn1 = substr($date1, 0, 4);

    switch ($bln1) {
        case 1: {
                $bln1 = 'Januari';
            }
            break;
        case 2: {
                $bln1 = 'Februari';
            }
            break;
        case 3: {
                $bln1 = 'Maret';
            }
            break;
        case 4: {
                $bln1 = 'April';
            }
            break;
        case 5: {
                $bln1 = 'Mei';
            }
            break;
        case 6: {
                $bln1 = "Juni";
            }
            break;
        case 7: {
                $bln1 = 'Juli';
            }
            break;
        case 8: {
                $bln1 = 'Agustus';
            }
            break;
        case 9: {
                $bln1 = 'September';
            }
            break;
        case 10: {
                $bln1 = 'Oktober';
            }
            break;
        case 11: {
                $bln1 = 'November';
            }
            break;
        case 12: {
                $bln1 = 'Desember';
            }
            break;
        default: {
                $bln1 = 'UnKnown';
            }
            break;
    }



    $tanggalInd = " " . $tgl1 . " " . $bln1 . " " . $thn1;
    return $tanggalInd;
}
