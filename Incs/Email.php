<?php
// Multiple recipients
$from = $_POST["Email"];
$Name = $_POST["Name"];
$Tick = $_POST["Tick"];
$URL = $_POST["URL"];
$ReTry = $_POST["ReTry"];
$Content = $_POST["Content"];
$to = 'a2bgroup@outlook.com'; //Change to selected email Address
$URL = explode("?", $URL);
$URL = $URL[0];
if ($Tick != 1) {
  $URL = $URL . '?Mes=NotSent';
 header('Location: '.$URL);

} else if ($ReTry != "") {
$URL = $URL . '?Mes=AlreadySent';
header('Location: '.$URL);
} else {

$URL = $URL . '?Mes=Sent';

// Subject
$subject = 'A message from ' . $Name . ' Via A2Bplumbingandelectrical';

// Message
$message = '<html>
<head>


</head>
<body>
<p>Name: '. $Name .'</p>
<p>Email: '. $from .'</p>
  <p>Message: '. $Content .'</p>


</body>
</html>';

// To send HTML mail, the Content-type header must be set
$headers[] = 'MIME-Version: 1.0';
$headers[] = 'Content-type: text/html; charset=iso-8859-1';

// Additional headers
$headers[] = 'From: A2Bplumbingandelectrical <A2Bplumbingandelectrical@mail.com>';


// Mail it
mail($to, $subject, $message, implode("\r\n", $headers));


header('Location: '.$URL);

}

?>
