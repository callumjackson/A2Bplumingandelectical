<?php
include 'Incs/Head.php';

session_start();
require 'Incs/Dbh.php';

 $id1 = $_SESSION['u_id'];



 $sqlInfo = "SELECT * FROM MainpageContent";
 //Selects car makes dependingon the array and set brands
 $resultInfo = mysqli_query($conn, $sqlInfo);
 if (mysqli_num_rows($resultInfo) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($resultInfo)) {
   $Gas = $row["Gas"];
   $Elec = $row["Elec"];
   $Plumb = $row["Plumb"];
   $Test1 = $row["Test1"];
   $Test2 = $row["Test2"];
   $Test3 = $row["Test3"];
  }
 } else {
  echo " ";

 }

 mysqli_close($conn);
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
<h5><a class="p-number" href="https://a2bplumbingandelectrical.co.uk/EmailPage.php">Or click here to drop us a Message.</a></h5>

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


   <div class="home-image-box">
     <img class="home-image1" src="images/main.jpg">
   </div>



</div> <!-- top -->

<div class="spacer">
<!-- a break between the top and bottom -->
</div>

<div class="container-bottom">

  <?php if (isset($_SESSION['u_id'])) {


    echo '<form action="Incs/modify.php" method="post" enctype="multipart/form-data">';


  }

   ?>


  <h2>Coventry based- Electricians, Gas Engineers, Plumbers</h2>

    <div class="service-offered">
        <h2>Services Offered</h2>
    </div>

<div class="row">
  <div class="col s12 m4 l4">
    <div class="row">
    <div class="col s12 m7">
      <div class="card-small">
        <div class="card-image-small">
          <img src="images/sr1.jpg">
          <span class="card-title"><h3>Gas</h3></span>
          <?php if (isset($_SESSION['u_id'])) {
            echo '<p><?php echo $ErrorGas ?></p>
            <textarea rows = "5" cols = "50" name = "Gas">'.$Gas.'</textarea>';
          } else {
            echo '<p>' . $Gas . '</p>';
          }?>

        </div>
      </div>
    </div>
  </div>
  </div>
  <div class="col s12 m4 l4">
    <div class="row">
      <div class="col s12 m7">
        <div class="card-small">
          <div class="card-image-small">
            <img src="images/sr2.jpg">
            <span class="card-title"><h3>Electrical</h3></span>
            <?php if (isset($_SESSION['u_id'])) {
              echo '<p><?php echo $ErrorElec ?></p>
              <textarea rows = "5" cols = "50" name = "Elec">'.$Elec.'</textarea>';
            } else {
              echo '<p>' . $Elec . '</p>';
            }?>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col s12 m4 l4">
    <div class="row">
      <div class="col s12 m7">
        <div class="card-small">
          <div class="card-image-small">
            <img src="images/sr3.jpg">
            <span class="card-title"><h3>Plumbing</h3></span>
            <?php if (isset($_SESSION['u_id'])) {
              echo '<p><?php echo $ErrorPlumb ?></p>
              <textarea rows = "5" cols = "50" name = "Plumb">'.$Plumb.'</textarea>';
            } else {
              echo '<p>' . $Plumb . '</p>';
            }?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php if (isset($_SESSION['u_id'])) {
  echo '<div class="">
      <div class="row">
      <input type="submit" value="Modify Page" name="submit">
      </form>
      </div>
    </div>';
  } ?>


</div>







<?php
include 'Incs/footer.php';
?>
