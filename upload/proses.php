<?php

$files = $_FILES;
$folder_upload = "./assets/uploads";

if (!is_dir($folder_upload)){
    mkdir($folder_upload, 0777, $rekursif = true);
}

// simpan masing masing file ke dalam variabel
// simpan file ke dalam array dan ubah menjadi objek
$fileFoto = (object) @$_FILES['foto'];
$fileKTP = (object) @$_FILES['ktp'];

// Mulai Upload File
$uploadFotoSukses = move_uploaded_file(
    $fileFoto->tmp_name, "{$folder_upload}/{$fileFoto->name}"
);

$uploadKTPSukses = move_uploaded_file(
    $fileKTP->tmp_name, "{$folder_upload}/{$fileKTP->name}"
);

if($uploadFotoSukses){
    $link = "{$folder_upload}/{$fileFoto->name}";
    echo "Sukses Upload Foto : <a href = '($link)'>
    {$fileFoto->name}</a>";
    echo "<br>";
}
if($uploadKTPSukses){
    $link = "{$folder_upload}/{$fileKTP->name}";
    echo "Sukses Upload KTP : <a href = '($link)'>
    {$fileKTP->name}</a>";
    echo "<br>";
}

//batas ukuran file yg diupload
if ($fileFoto->size > 1000 * 2000){
    die("File tidak boleh lebih dari 2mb");
}
//jenis gambar yg bisa diupload
if ($fileKTP->size !=='image/jpg'){
    die("Foto harus berformat jpg");
}

// echo "<pre>";
// print_r($files);
// echo "</pre>";