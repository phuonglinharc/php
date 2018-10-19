<?php
$file = $_FILES['images'];
$count = count($file['name']);
$target_dir = 'avatars/';

if(isset($_POST['submit'])){
    $result = '';
    for($i=0; $i<$count; $i++){
        $file_name = $file['name'][$i];
        $target_file = $target_dir.basename($file['name'][$i]);
        $file_ext = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        $allow_file_types =  array('jpg','png', 'gif', 'jpeg');
        $file_size = $file['size'][$i];
        $tmp_name = $file['tmp_name'][$i];        

        if(in_array($file_ext,$allow_file_types) && $file_size <= 1000000){
            $new_file_name = 'avatar_'.$file_name;
            if(file_exists($target_dir.$new_file_name)){
                echo "You have ready upload the $file_name file.";
                echo "<br>";
            }
            else{
                move_uploaded_file($tmp_name, $target_dir.$new_file_name);
                echo "File $file_name uploaded successfully.<br>";
            }
        }

        elseif(empty($file_name)){
            $result = 'Please select a file to upload.<br>';
        }

        elseif($file_size > 1000000){
            echo "The file you are trying to upload is too large.<br>";
            unlink($tmp_name);
            exit();
        }  

        else{
            echo "Sory, only JPG, PNG & GIF files are allowed.<br>";
            unlink($tmp_name);
            exit();
        }
    }
}


?>