<?php
require_once 'mahasiswa.php';


if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['nim']) && isset($_GET['nama']) && isset($_GET['kuliah']) && isset($_GET['nilai'])) {
   
    $nim = $_GET['nim'];
    $nama = $_GET['nama'];
    $kuliah = $_GET['kuliah'];
    $nilai = $_GET['nilai'];

   
    $ns1 = new Mahasiswa($nim, $nama, $kuliah, $nilai);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampil Nilai Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 p-6">
    <h2 class="text-2xl font-bold mb-4">Data Nilai Mahasiswa</h2>
    <table class="table-auto border-collapse border border-gray-600 w-full text-center">
        <thead>
            <tr class="bg-gray-200">
                <th class="border border-gray-600 px-4 py-2">NIM</th>
                <th class="border border-gray-600 px-4 py-2">Nama</th>
                <th class="border border-gray-600 px-4 py-2">Kuliah</th>
                <th class="border border-gray-600 px-4 py-2">Nilai</th>
                <th class="border border-gray-600 px-4 py-2">Grade</th>
                <th class="border border-gray-600 px-4 py-2">Predikat</th>
                <th class="border border-gray-600 px-4 py-2">Status</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="border border-gray-600 px-4 py-2"><?php echo $ns1->nim; ?></td>
                <td class="border border-gray-600 px-4 py-2"><?php echo $ns1->nama; ?></td>
                <td class="border border-gray-600 px-4 py-2"><?php echo $ns1->kuliah; ?></td>
                <td class="border border-gray-600 px-4 py-2"><?php echo $ns1->nilai; ?></td>
                <td class="border border-gray-600 px-4 py-2"><?php echo $ns1->hitungGrade(); ?></td>
                <td class="border border-gray-600 px-4 py-2"><?php echo $ns1->hitungPredikat(); ?></td>
                <td class="border border-gray-600 px-4 py-2"><?php echo $ns1->cekStatus(); ?></td>
            </tr>
        </tbody>
    </table>

   
    <a href="objMahasiswa.php" class="block mt-4 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline text-center">Back</a>
</body>
</html>


