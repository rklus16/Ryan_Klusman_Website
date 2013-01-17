<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link rel="stylesheet" type="text/css" href="../css/portfolio.css" media="screen" />


<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Oswald:400,700' rel='stylesheet' type='text/css'>
</head>

<body>

<?php
if(isset($_POST['submit'])) {
	$to = "ryanklusmandesign@gmail.com";
	$subject = "RAK Site: " . $_POST['subject'];
	$name_field = $_POST['name'];
	$email_field = $_POST['email'];
	$message = $_POST['message'];
	
	$body = "From: $name_field\n\n Email: $email_field\n\n Message:\n $message";
	
	echo "<h2>Thank you!</h2><p>Thank you for filling out the form.  I will contact you within 24-48 hours.</p><h4>Ryan</h4>";
	
	mail($to, $subject, $body);
	
}

else {
	
	echo "<h2>ERROR</h2><p>There seems to have been an error processing the form.  Please submit the form again. If the problem persists please contact me directly at ryanklusmandesign@gmail.com</p><h4>Thank you, Ryan</h4>";
}
?>

</body>
</html>
