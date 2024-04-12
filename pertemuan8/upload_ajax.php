<?php
//if (isset($_FILES['file'])){
//    $errors = array();
//    $file_name = $_FILES['file']['name'];
//    $file_size = $_FILES['file']['size'];
//    $file_tmp = $_FILES['file']['tmp_name'];
//    $file_type = $_FILES['file']['type'];
//    @$file_ext = strtolower("" . end(explode(".", $_FILES["file"]["name"])) . "");
//    $extensions = array("pdf","doc","docx","txt");

//    if(in_array($file_ext, $extensions) === false){
//        $errors[] = "Ekstensi file yang diizinkan adalah PDF, DOC, DOCX, atau TXT";
//    }
//    if ($file_size > 2097152){
//        $errors[] = "Ukuran file tidak boleh lebih dari 2 MB";
//    }
//    if (empty($errors) === true){
//        move_uploaded_file($file_tmp, "documents/" . $file_name);
//        echo "File berhasil diunggah";
//    }
//    else{
//        echo implode(" ", $errors);
//    }
//}

//3.2
if(isset($_FILES['file'])){
    $errors = array();
    $file_name = $_FILES['file']['name'];
    $file_size = $_FILES['file']['size'];
    $file_tmp = $_FILES['file']['tmp_name'];
    $file_type = $_FILES['file']['type'];
    @$file_ext = strtolower("" . end(explode('.', $_FILES['file']['name'])) . "");
    $extentions = array("png", "jpg", "jpeg", "gif");
    if (in_array($file_ext, $extentions) == false) {
    $errors[] = "Ekstensi file yang diizinkan adalah PNG, JPEG, JPG dan GIF. ";
    }
    if ($file_size > 2097152){
    $errors[] = 'Ukuran file tidak boleh lebig dari 2 MB';
    }
    if (empty($errors) == true) {
    move_uploaded_file($file_tmp, "uploads/" . $file_name);
    echo "File berhasil diunggah. ";
    } else {
    echo implode(" ", $errors);
    }
    }
?>
