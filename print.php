<?php
// Require composer autoload
require_once __DIR__ . '/vendor/autoload.php';
include("./libs/koneksi.php");
$data = mysqli_query($koneksi,"SELECT * FROM transaction");

// Create an instance of the class:
$mpdf = new \Mpdf\Mpdf();

$html = '<!DOCTYPE html>
<html lang="en">
<head>
    <title>Transaksi</title>
</head>
<body>
    <h1>Laporan</h1>
    <table cellpadding="10" cellspacing="10">
        <tr>
            <th>NO</th>
            <th>Genre</th>
            <th>Supplier</th>
            <th>Series</th>
            <th>Harga</th>
            <th>Stok</th>
        </tr>';

        $i = 1;
        foreach($data as $row) {
            $html .= '<tr>
                <td>'. $i++ .'</td>
                <td>'.$row['nama'].'</td>
                <td>'.$row['supplier'].'</td>
                <td>
                    <ul>
                        <li>'. $row['kategori'] .'</li>
                        <li>'. $row['merek'] .'</li>
                    </ul>
                </td>
                <td>'.$row['harga'].'</td>
                <td>'.$row['stok'].'</td>
            </tr>';
        };

$html .=  '</table>
</body>
</html>';

// Write some HTML code:
$mpdf->WriteHTML($html);

// Output a PDF file directly to the browser
$mpdf->Output('Laporan-Transaksi.pdf', \Mpdf\Output\Destination::INLINE);