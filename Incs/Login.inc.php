<?php


include 'Dbh.php';
session_start();

if (isset($_POST['submit'])) {



	$uid = mysqli_real_escape_string($conn, $_POST['Username']);
	$pwd = mysqli_real_escape_string($conn, $_POST['Password']);
	echo $uid;
	echo $_POST['Username'];
	echo $pwd;


	//Error handlers
	//Check that the inputs are empty
		if (empty($uid) || empty($pwd)) {
			header("Location: ../login.php?login=empty");
			exit();
		} else {
			$sql = "SELECT * FROM users WHERE Username='$uid'";
			$result = mysqli_query($conn, $sql);
			$resultCheck = mysqli_num_rows($result);


			if ($resultCheck < 1) {
				header("Location: ../login.php?login=error1");
				exit();
			} else {
				if ($row = mysqli_fetch_assoc($result)) {
					//de-hashing the password
					$hashedPwdCheck = password_verify($pwd, $row['password']);
					//echo password_hash($pwd, PASSWORD_DEFAULT);
				//	echo '<br>';
        //  echo $row['password'];

					if ($hashedPwdCheck == false) {
						header("Location: ../login.php?login=error2");
						exit();

				} elseif ($hashedPwdCheck == true){
					//login the user here
					$_SESSION['u_id'] =$row['id'];
					$_SESSION['u_first'] =$row['First'];
					$_SESSION['u_last'] =$row['Last'];
					$_SESSION['u_email'] =$row['email'];
					$_SESSION['u_uid'] =$row['Username'];
					header("Location: ../index.php?login=success");
					exit();
				}
			}
		}
	}
}  else {
	header("Location: ../login.php?login=error3");
	exit();
}
