<?php
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$fileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

echo "processing upload request, file=". basename($_FILES["fileToUpload"]["name"]) .", target directory= ".$target_dir."....\n" ;


// Check if file already exists
if (file_exists($target_file)) {
  echo "A file with that name already exists.";
  $uploadOk = 0;
}

// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
  echo "Sorry, your file is too large.... size: ".$_FILES["fileToUpload"]["size"];
  $uploadOk = 0;
}

// Allow certain file formats
if($fileType == "html" || $fileType == "php" || $fileType == "sh" ) {
  echo "Sorry, file type not allowed here: .".$fileType;
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "\n==> Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    echo "\n==> The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
  } else {
    echo "\n==> Sorry, there was an error uploading your file.";
  }
}
?>
