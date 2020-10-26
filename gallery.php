<?php
session_start();

include 'Incs/Dbh.php';

$id1 = $_SESSION['u_id'];
$LoopSet = 0;

$sqlPics = "SELECT * FROM Gallery ORDER BY ID DESC";

$resultPics = mysqli_query($conn, $sqlPics);
if (mysqli_num_rows($resultPics) > 0) {
 // output data of each row
 while($row = mysqli_fetch_assoc($resultPics)) {
  $ID[$LoopSet] = $row["ID"];
  $Path[$LoopSet] = $row["Path"];
  $Disc[$LoopSet] = $row["Disc"];
  $Title[$LoopSet] = $row["Title"];
   $LoopSet++;
 }
} else {
 echo " ";

}

mysqli_close($conn);

include 'Incs/Head.php';
?>


















<body>

  <div class="floating-btn">

  <!-- Modal Trigger -->
    <a class="waves-effect waves-light btn modal-trigger" href="#modal1">Call us today for a free quote.</a>

    <!-- Modal Structure -->
 <div id="modal1" class="modal">
   <div class="modal-content center">
     <h3>Coventry based Construction Company offering a variety of services for domestic and commercial clients </h3>
     <p>- Plumbing / Heating / Gas - Installations, Servicing and breakdowns.

<br>​

- Electrical rewires / Fuse board changes, New and existing lighting changes, CCTV, Shower and Cooker installations.

<br>​

- Kitchen and Bathroom design and installations.

​<br>​

- Fencing, gates, boundary security, groundworks and footings.

​<br>​

- Plastering and Rendering. Internal and external work undertaken.

​<br>​

- New build houses and properties eg- garages, workshops, industrial units.

​<br>​

- House extensions and conversions.

​<br>​

- Drainage, water, gas, electrical services arranged and installed with in boundaries.

​<br>​

- Complete property renovations and developments.

​<br>​

All enquiries are welcome, we have time served friendly approachable tradesmen and tradeswomen that will be willing to help you with your ideas, plans and projects, Call us or email on our contact page or via our social media pages.

We are always willing to help.</p>

<h5>Call us today T- <a class="p-number" href="tel:07714978981">07714978981</a></h5>
<h5>Or click here to drop us a <a class="p-number" href="https://a2bplumbingandelectrical.co.uk/EmailPage.php">Message.</a></h5>

   </div>
   <div class="modal-footer">
     <a href="#!" class="modal-close waves-effect waves-green btn-flat">Close</a>
   </div>
 </div>
  </div>
<div class="container-top">




      <?php
      require 'Incs/Nav.php';
      ?>




</div> <!-- top -->

<div class="spacer">
<!-- a break between the top and bottom -->
</div>

  <div class="container-bottom">





    <?php if (isset($_SESSION['u_id'])) {
      echo '<div class="row">
          <form action="upload.php" class="gallery-upload" method="post" enctype="multipart/form-data">
          Select image to upload: <p><?php echo $ErrorPic ?></p>
          <input type="file" name="fileToUpload" id="fileToUpload">
          <br>  Title: <p><?php echo $ErrorTitle ?></p><input type="text" name="Title"><br>
          Discription: <p><?php echo $ErrorDisc ?></p><input type="text" name="Disc"><br>
          <input type="submit" value="Upload Image" name="submit">
      </form>
      </div>';
    }

     ?>



<div class="row">



<?php
$LoopSet1 = 0;


while(isset($Path[$LoopSet1])) {

if (isset($_SESSION['u_id'])) {
  $Delete = '<a href="https://a2bplumbingandelectrical.co.uk/Incs/Del.php?Img=' . $ID[$LoopSet1] . '">Delete Image</a>';
  }



  echo '<div class="col s12 m4 l4">
   <div class="card">
     <div class="card-image">
       <img  src="'. $Path[$LoopSet1] .'">
       <span class="card-title">'. $Title[$LoopSet1] .'</span>
     </div>
     <div class="card-content">
       <p>' . $Delete . $Disc[$LoopSet1] . '</p>
     </div>

   </div>
 </div>';





 $LoopSet1++;

}





?>









        </div> <!--End of row -->
</div>


<?php
include 'Incs/footer.php';
?>
