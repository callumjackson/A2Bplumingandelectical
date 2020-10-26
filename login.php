<?php
include 'Incs/Head.php';

session_start();



if(isset($_SESSION['u_id'])!="") {
	header("Location: index.php");
} //redirects to the users pages if logged in

include_once 'Incs/Dbh.php';


?>
<div class="container-top">
			<?php
			require 'Incs/Nav.php';
			?>
</div> <!-- top -->


<div class="spacer">
<!-- a break between the top and bottom -->
</div>

	<div class="container-bottom">






<main>
	<link href="css/LogStyle.css" type="text/css" rel="stylesheet" media="all"/>





<div class="login-form">
	<div class="container log">
		<h1>Login</h1>
		<div class="row">
			<div class="col-md-4 col-md-offset-4 well">
				<form action="Incs/Login.inc.php" method="post" name="loginform">
					<fieldset>


						<div class="form-group">
							<label for="Username" class="">Username</label>
							<input type="text" id="Username" name="Username" placeholder="Your Username" required class="form-control white-text"/>
						</div>

						<div class="form-group">
							<label for="Password" class="">Password</label>
							<input type="password" id="Password" name="Password" placeholder="Your Password" required class="form-control white-text"/>
						</div>



						<div class="form-group">
							<input class="waves-effect waves-light btn" type="submit" name="submit" value="submit"/>
						</div>
					</fieldset>
				</form>
				<span class="text-danger"><?php if (isset($errormsg)) { echo $errormsg; } ?></span>
			</div>
		</div>

	</div>
</div>


</main>

<?php
include 'Incs/footer.php';
 ?>
