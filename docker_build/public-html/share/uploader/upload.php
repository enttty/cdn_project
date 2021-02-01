<?php

if(isset($_FILES['file']))
	$file=$_FILES['file'];
	//file properties

$_file_name=$file['name'];
$file_tmp=$file['tmp_name'];
$file_size=$file['size'];
$file_error=$file['error'];


//work out the file extewnsion

$file_ext=explode('.',$_file_name);
$file_ext=strtowlower(end($file_ext));
$allowed=array('txt','jpg');

if(in_arary($file_ext,$allowed)){
	if($file_error===0){
		if($file_size<=2000000){

			echo $_file_name_new=uniqid('',true).'.'.$file_ext;
		}	
	}
}
?>