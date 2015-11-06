<?php
$EmailFrom = $_REQUEST['email'];
$EmailTo = "erinblauw@me.com"; // Your email address here
$Subject = "Contact form";
$Name = Trim(stripslashes($_POST['name']));
$Email = Trim(stripslashes($_POST['email']));
$Message = Trim(stripslashes($_POST['message']));
​
// validation
$validationOK=true;
if (!$validationOK) {
  echo "Error";
  exit;
}
​
// prepare email body text
$Body = "";
$Body .= "Name: ". $Name. "\n";
$Body .= "Email". $Email. "\n";
$Body .= "Message: ". $Message. "\n";
​
// send email
$success = mail($EmailTo, $Subject, $Body, "From: <$EmailFrom>");
​
// redirect to success page
if ($success){
  echo "Succes";
}
else{
  echo "Error";
}
?>
