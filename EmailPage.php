<?php
include 'Incs/Head.php';

session_start();
require 'Incs/Dbh.php';

 $id1 = $_SESSION['u_id'];
 ?>

<body>
  <div class="container-top">
        <?php
        require 'Incs/Nav.php';
        ?>
  </div> <!-- top -->


  <div class="spacer">
  <!-- a break between the top and bottom -->
  </div>

    <div class="container-bottom">

<!--Contact Modal button-->
<div class="mapouter">
<div class="gmap_canvas">
<iframe id="gmap_canvas" src="https://maps.google.com/maps?q=coventry&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe></div>

</div>


    <h2>To Arrange a booking please fill out this short booking from <br><br> We will get back to you as soon as possible.</h2>
    <div class="contact-btn">
        <a class="modal-trigger btn" href="#modal1">Contact us - Booking form</a>
    </div>
      <h2>Or call us on <a href="tel:07714978981">07714978981</a> </h2>





</div>


<?php
include 'Incs/footer.php';
?>


<?php

if ($_GET["Mes"] == 'Sent') {


  echo "<script>
   $(document).ready(function(){
      $('#modal2').modal();
      $('#modal2').modal('open');


      setTimeout(
    function()
    {
    $('#modal2').modal('close');
  }, 2500);

   });
  </script>";


} else if ($_GET["Mes"] == 'AlreadySent') {

  echo "<script>
   $(document).ready(function(){
      $('#modal3').modal();
      $('#modal3').modal('open');


      setTimeout(
    function()
    {
    $('#modal3').modal('close');
  }, 2500);

   });
  </script>";

} else if ($_GET["Mes"] == 'NotSent') {
  echo "<script>
   $(document).ready(function(){
      $('#modal4').modal();
      $('#modal4').modal('open');


      setTimeout(
    function()
    {
    $('#modal4').modal('close');
  }, 2500);

   });
  </script>";


}

if ($_GET["Mes"] !== "NotSent") {
$ReTry = $_GET["Mes"];
}
?>


<script language="javascript" type="text/javascript">

$(document).ready(function(){
$('#modal1').modal();
});


function submitEmail() {
     $("#EmailForm").submit();
}


function validateForm() {
  var m = document.forms["EmailForm"]["Tick"].value;
  if (m == "") {
      $("#ErrorTick").html('You forgot to confirm your a human.');
      return false;

  }
    var x = document.forms["EmailForm"]["Name"].value;
    if (x == "") {
        $("#ErrorName").html('A Name must be entered');
        return false;

    }
    var y = document.forms["EmailForm"]["Email"].value;
    if (y == "") {
      $("#ErrorEmail").html('An Email must be provided');
        return false;

    }
    var z = document.forms["EmailForm"]["Content"].value;
    if (z == "") {
      $("#ErrorContent").html('You havent entered a message');
        return false;

    }

    var emailaddress = document.forms["EmailForm"]["Email"].value;

    if( !validateEmail(emailaddress)) {
      $("#ErrorEmail").html('Your email is invalid');
      return false;
    }
}


function validateEmail($email) {
 var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
 return emailReg.test( $email );
}




</script>

<?php $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
?>

<!-- Contact form modal -->
<div id="modal1" class="modal">
<div class="modal-content">
 <h4>Contact us</h4>
 <form action="Incs/Email.php" id="EmailForm" onsubmit="return validateForm()" method="post">
Name: <p id="ErrorName"></p> <input type="text" name="Name" placeholder="Enter your Fullname"><br>
Email: <p id="ErrorEmail"></p><input type="text" name="Email" placeholder="Enter your Email Address"><br>
Message: <p id="ErrorContent"></p> <textarea type="text" name="Content" rows="10" cols="30" placeholder="Add your message" style="
    color: black;"></textarea><br>
Im Human: <p id="ErrorTick"></p> <input type="checkbox" name="Tick" value="1"><br>
<input type="hidden" name="URL" value="<?php echo $actual_link; ?>"><br>
<input type="hidden" name="ReTry" value="<?php echo $ReTry; ?>"><br>
</form>
</div>
<div class="modal-footer">
 <a href="#!" class="modal-close waves-effect waves-red btn-flat">Close</a>
 <a href="#!" class="waves-effect waves-green btn-flat" onClick='submitEmail()'>Send</a>
</div>
</div>

<!-- Message Sent Modal -->
<div id="modal2" class="modal">
<div class="modal-content">
 <h4>Message Sent</h4>

</div>
</div>

<!--Message Already Sent Modal-->
<div id="modal3" class="modal">
<div class="modal-content">
 <h4>Message Already Sent</h4>

</div>
</div>

<!--Message Not Sent Modal-->
<div id="modal4" class="modal">
<div class="modal-content">
 <h4>Message Not Sent <br> Try Again </h4>

</div>
</div>


<!--Modal open function decliration-->
<script>
$(document).ready(function(){
// the "href" attribute of the modal trigger must specify the modal ID that wants to be triggered
$('.modal2').modal();
});
</script>
<script>
$(document).ready(function(){
// the "href" attribute of the modal trigger must specify the modal ID that wants to be triggered
$('.modal3').modal();
});
</script>
<script>
$(document).ready(function(){
// the "href" attribute of the modal trigger must specify the modal ID that wants to be triggered
$('.modal3').modal();
});
</script>
<script>
$(document).ready(function(){
// the "href" attribute of the modal trigger must specify the modal ID that wants to be triggered
$('.modal4').modal();
});
</script>

<script type="text/javascript" src="js/materialize.js"></script>

</html>
