<?php
$target_dir = "videos/".$_POST["class"]."/".$_POST["grade"]."/".$_POST["page"]."/";
$target_file = $target_dir . basename($_FILES["file-ip-1"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
echo "videos/".$_POST["class"]."/".$_POST["grade"]."/".$_POST["page"]."/";

if($imageFileType != "mp4" && $imageFileType != "gif" && $imageFileType != "webm") {
  echo "Sorry, only mp4 & gif & webm files are allowed.";
  $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["file-ip-1"]["tmp_name"], $target_file)) {
    echo "The file ". htmlspecialchars( basename( $_FILES["file-ip-1"]["name"])). " has been uploaded.";
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
}
?>