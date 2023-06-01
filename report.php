<?php
require 'vendor/autoload.php'; // Mengimpor library PhpSpreadsheet

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

// Koneksi ke database
$servername = "localhost";
$username = "root";
$password = "password";
$dbname = "database_name";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Query untuk mendapatkan data sesuai filter
$filterValue = 5000000; // Ganti dengan nilai filter yang diinginkan
$sql = "SELECT Date, Value FROM Spending WHERE Value >= $filterValue";
$result = $conn->query($sql);

// Membuat spreadsheet baru
$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();

// Menambahkan header kolom
$sheet->setCellValue('A1', 'Date');
$sheet->setCellValue('B1', 'Value');

// Menambahkan data dari hasil query
$row = 2;
if ($result->num_rows > 0) {
    while ($row_data = $result->fetch_assoc()) {
        $sheet->setCellValue('A' . $row, $row_data['Date']);
        $sheet->setCellValue('B' . $row, $row_data['Value']);
        $row++;
    }
}

// Menyimpan spreadsheet dalam file Excel
$writer = new Xlsx($spreadsheet);
$filename = 'report.xlsx'; // Nama file yang dihasilkan
$writer->save($filename);

// Mengirim file Excel sebagai respon untuk didownload
header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment;filename="' . $filename . '"');
header('Cache-Control: max-age=0');
$writer->save('php://output');

// Menutup koneksi database
$conn->close();
?>
