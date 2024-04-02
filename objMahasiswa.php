<?php

require_once 'Mahasiswa.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nim = isset($_POST['nim']) ? $_POST['nim'] : '';
    $nama = isset($_POST['nama']) ? $_POST['nama'] : '';
    $kuliah = isset($_POST['kuliah']) ? $_POST['kuliah'] : '';
    $nilai = isset($_POST['nilai']) ? $_POST['nilai'] : '';

   
    $ns1 = new Mahasiswa($nim, $nama, $kuliah, $nilai);

   
    header("Location: tampilNilai.php?nim=$nim&nama=$nama&kuliah=$kuliah&nilai=$nilai");
    exit;
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 p-6">
    <h2 class="text-2xl font-bold mb-4 text-center">Form Input Mahasiswa</h2>
    <form action="objMahasiswa.php" method="POST" class="max-w-md bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 mx-auto">
        <div class="mb-4">
            <label for="nim" class="block text-gray-700 text-sm font-bold mb-2">NIM:</label>
            <input type="text" name="nim" id="nim" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
        </div>
        <div class="mb-4">
            <label for="nama" class="block text-gray-700 text-sm font-bold mb-2">Nama:</label>
            <input type="text" name="nama" id="nama" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
        </div>
        <div class="mb-4">
            <label for="kuliah" class="block text-gray-700 text-sm font-bold mb-2">Kuliah:</label>
            <select name="kuliah" id="kuliah" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                <option value="kampusAnda" selected>Masukan Kampus anda</option>
                <option value="unikom">Unikom</option>
                <option value="telkom">Telkom</option>
                <option value="ipb">IPB</option>
                <option value="itb">ITB</option>
            </select>
        </div>


        <div class="mb-6">
            <label for="nilai" class="block text-gray-700 text-sm font-bold mb-2">Nilai:</label>
            <input type="number" name="nilai" id="nilai" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
        </div>
        <div class="flex items-center justify-between">
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Submit</button>
        </div>
    </form>
</body>
</html>

