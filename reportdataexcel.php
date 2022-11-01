<?php
include('koneksi.php');
require 'vendor/autoload.php';
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();
$sheet->setCellValue('B1', 'NIS');
$sheet->setCellValue('C1', 'name');
$sheet->setCellValue('D1', 'kelas');

$query = mysqli_query($connection,"select * from user");
$i = 2;
$no = 1;
while($row = mysqli_fetch_array($query))
{
    $sheet->setCellValue('B'.$i, $row['NIS']);
    $sheet->setCellValue('C'.$i, $row['name']);
    $sheet->setCellValue('D'.$i, $row['kelas']);    
    $i++;
}

$styleArray = [
            'borders' => [
                'allBorders' => [
                    'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
                ],
            ],
        ];
$i = $i - 1;
$sheet->getStyle('A1:E'.$i)->applyFromArray($styleArray);


$writer = new Xlsx($spreadsheet);
$writer->save('Data Siswa.xlsx');
echo "<script>window.location = 'Data Siswa.xlsx'</script>";

?>