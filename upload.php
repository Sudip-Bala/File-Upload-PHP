<?php
// Lets Check from Submit or not
if($_SERVER["REQUEST_METHOD"] == "POST"){

if(isset($_FILES['photo']) && $_FILES['photo']['error'] == 0){

    $allowed = array("jpg"=>"image/jpg", "jpeg"=>"image/jpeg", "png"=>"image/png", "gif"=>"image/gif");
    $filename = $_FILES['photo']['name'];
    $filetype = $_FILES['photo']['type'];
    $filesize = $_FILES['photo']['size'];

//verify
$ext = pathinfo( $filename, PATHINFO_EXTENSION);
if(!array_key_exists($ext, $allowed)) die('Please Choose a Valid File');

//--Validation With Size
$maxsize = 5*1024*1024;
if($filesize > $maxsize) die("error : File is Greater Than 5Mb!");

if(in_array($filetype,  $allowed)){
    move_uploaded_file($_FILES['photo']['tmp_name'], "upload/".$filename);
    echo "File Uplode Successfully Done!";
}else{
    echo "File not Uploaded!";
}

}else{
    echo "error"  .$_FILES['photo']['error'];
}


}else{
    echo "Something Went Wrong";
}

?>