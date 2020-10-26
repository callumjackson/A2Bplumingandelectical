<?php

session_start();

include 'Dbh.php';






if (!empty($_POST["Gas"])) {
  $Gas = $_POST["Gas"];
}

if (!empty($_POST["Elec"])) {
  $Elec = $_POST["Elec"];
}

if (!empty($_POST["Plumb"])) {
  $Plumb = $_POST["Plumb"];
}



$URL = "https://a2bplumbingandelectrical.co.uk/index.php";
$URL1 = "https://a2bplumbingandelectrical.co.uk/index.php";



if (!isset($Gas)) {
  $URL = $URL . '?edit=GasInvalid';
  header('Location: '.$URL);

} else if (!isset($Elec)) {
  $URL = $URL . '?edit=ElecInvalid';
  header('Location: '.$URL);

} else if (!isset($Plumb)) {
  $URL = $URL . '?edit=PlumbInvalid';
  header('Location: '.$URL);

} else {
$sql = "UPDATE MainpageContent SET Gas = '$Gas', Elec = '$Elec', Plumb = '$Plumb'  WHERE ID = 1";



//echo $sql;



mysqli_query($conn, $sql);

mysqli_close($conn);

$URL1 = $URL1 . '?Edit=Success';

//echo $URL1;
//echo $sql;
//echo $Test1;

 header('Location: '.$URL1);
}

?>
