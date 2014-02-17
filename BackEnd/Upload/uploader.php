<?php
include_once('dbconfig.php');


$name = $_FILES['file']['name'];
$size = $_FILES['file']['size'];
$type = $_FILES['file']['type'];
$url = "uploads/".$_FILES['file']['name'];
$extension = strtolower(substr($name,strrpos($name,'.') + 1));
$max_size = 102400;


$tmp_name = $_FILES['file']['tmp_name'];

if($name != NULL){
	if($size < $max_size){

	$location = 'uploads/';

		if(file_exists($location.$name)){
			echo "<script>alert('File already exists');window.location.href='upload.php'</script>";
		 }else{
		 	move_uploaded_file($tmp_name, $location.$name);
			echo "File Uploaded.";
		}
	}else{
		echo "File size exceeded.";
	}
}else{
	echo "<script>alert('Please choose a file.');window.location.href='upload.php';</script>";
}



$query = "INSERT INTO file_details(file_name,file_size,file_type,file_location)
			VALUES ('{$name}','{$size}','{$type}','{$url}')";
$result = mysql_query($query);
?>