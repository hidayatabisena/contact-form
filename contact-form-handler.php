<?php 
$errors = '';
$myemail = 'sena@mayar.id';//<-----Put Your email address here.
if(empty($_POST['name'])  || 
   empty($_POST['email']) || 
   empty($_POST['message']))
{
    $errors .= "\n Error: all fields are required";
}

$name = $_POST['name']; 
$email_address = $_POST['email']; 
$message = $_POST['message']; 

if (!preg_match(
"/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i", 
$email_address))
{
    $errors .= "\n Error: Invalid email address";
}

// if isset input name all
if(isset($_POST['submit']) || 
    isset($_POST['email']) || 
    isset($_POST['message']) ||
    isset($_POST['name'])) {
    
        // what if true and then..
        echo "<script>
        alert('Submit Success!!, we send to your email : ".$email_address."');
        window.location='".'contact-form-thank-you.html'."';
        </script>";
}  ?>


<html>
<head>
	<title>Contact form handler</title>
</head>

<body>
<!-- This page is displayed only if there is some error -->
<?php
echo nl2br($errors);
?>

</body>
</html>