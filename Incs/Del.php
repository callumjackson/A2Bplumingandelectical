<?php
include 'Dbh.php';
session_start();
$UserID = $_SESSION['u_id'];
if (isset($_GET['Img'])) {
$DELETE = $_GET['Img'];
$sql = "DELETE FROM Gallery WHERE ID = $DELETE";
  /*Delete query*/
    $result = mysqli_query($conn, $sql);
mysqli_close($conn);
header('Location: https://a2bplumbingandelectrical.co.uk/gallery.php?ImgDel=success');
}
?>
