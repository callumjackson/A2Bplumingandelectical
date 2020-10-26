<?php
$target_dir = "images/";


if (!empty($_POST["Disc"])) {
  $Disc = $_POST["Disc"];
}

if (!empty($_POST["Title"])) {
  $Title = $_POST["Title"];
}

$URL = "https://a2bplumbingandelectrical.co.uk/gallery.php";
$URL1 = "https://a2bplumbingandelectrical.co.uk/gallery.php";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
      $URL = $URL . '?Pic=NotValid';
      header('Location: '.$URL);
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
/*if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $URL = $URL . '?Pic=Exists';
    header('Location: '.$URL);
    $uploadOk = 0;
} else*/ if (!isset($Disc)) {
  $URL = $URL . '?Pic=DiscInvalid';
  header('Location: '.$URL);

} else if (!isset($Title)) {
  $URL = $URL . '?Pic=TitleInvalid';
  header('Location: '.$URL);

}

// Check file size
else if ($_FILES["fileToUpload"]["size"] > 6500000) {
    echo "Sorry, your file is too large.";
    $URL = $URL . '?Pic=TooLarge';
    header('Location: '.$URL);
    $uploadOk = 0;
}
// Allow certain file formats
else if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $URL = $URL . '?Pic=NotValid';
    header('Location: '.$URL);
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
else if ($uploadOk == 0) {

  $URL = $URL . '?Pic=Fail';
  header('Location: '.$URL);
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";

        session_start();

        include 'Incs/Dbh.php';
        $sql = "INSERT INTO Gallery VALUES (NULL, '$target_file', '$Disc', '$Title')";

        //echo $sql;
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
         // output data of each row
         while($row = mysqli_fetch_assoc($result)) {

        //$ItemID = $row["ItemID"];

         }
        }

echo $sql;


mysqli_close($conn);

        $URL1 = $URL1 . '?Pic=Success';
      header('Location: '.$URL1);
    } else {
        echo "Sorry, there was an error uploading your file.";
        $URL = $URL . '?Pic=Fail';
        header('Location: '.$URL);
    }
}



?>
