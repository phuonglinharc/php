<?php

//need: path, size, name, extension

$file = $_FILES['image'];
$target_dir = 'avatars/'; // thu muc chi dinh de luu file
$tmp_name = $file['tmp_name'];
$file_name = $file['name'];
$file_size = $file['size'];
$target_file = $target_dir.basename($file['name']);
$filename_ext = strtolower(pathinfo($target_file,PATHINFO_EXTENSION)); // lay duoi mo rong cua file
$allow_file_types = array('png','jpg','gif');

if(isset($_POST['submit'])){
    //ham in_array xet $filename_ext bang voi 1 trong cac gia tri trong mang $allow_file_types
    if(in_array($filename_ext,$allow_file_types) && $file_size <= 1000000){
        $new_filename = 'avatar_'.$file_name;
        if(file_exists($target_dir.$new_filename)){
            echo 'You have ready upload this file.';
        }
        else{
            move_uploaded_file($tmp_name,$target_dir.$new_filename);
            echo "File uploaded successfully.";
        }
    }
    elseif(empty($file_name)){
        echo 'Please select a file to upload.';
    }
    elseif($file_size > 1000000){
        echo 'The file you are trying to upload is too large.';
    }
    else{
        echo 'Sorry, only '.strtoupper(implode(', ', $allow_file_types)).' files are allowed.';
        unlink($tmp_name);
    }
}


?>