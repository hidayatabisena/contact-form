<html>
<head>
	<title>Contact us now</title>
<!-- define some style elements-->
<style>

h1
{
	font-family : Arial, Helvetica, sans-serif;
	font-size : 24px;
    font-weight : bold;
	text-align: center;
}
div.input-contact { /* div class input-contact */
  margin: 20px 0;
}
input[type=text], textarea { /* type text */

  width: 100%; /* Full width */
  padding: 12px; /* Some padding */ 
  border: 1px solid #ccc; /* Gray border */
  border-radius: 4px; /* Rounded borders */
  box-sizing: border-box; /* Make sure that padding and width stays in place */
  margin-top: 6px; /* Add a top margin */
  margin-bottom: 16px; /* Bottom margin */
  resize: vertical /* Allow the user to vertically resize the textarea (not horizontally) */
  
}
div.container{ /* container */
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
  width: 50%;
  margin-left: 400px;
  margin-top: 80px;
}
input[type=submit]{ /* type submit */
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}
input[type=submit]:hover { /* type submit */
  background-color: #45a049;
}
 
label,a 
{
	font-family : Arial, Helvetica, sans-serif;
	font-size : 16px; 
	
}


</style>	
<!-- a helper script for vaidating the form-->
<script language="JavaScript" src="scripts/gen_validatorv31.js" type="text/javascript"></script>
</head>	


<body>
	<div class="container">

		<h1>Contact us</h1>
			<form method="POST" name="contactform" action="contact-form-handler.php"> 
				<div class="input-contact">
					<label for='name'>Your Name:</label>
					<input type="text" name="name">
				</div>
				<div class="input-contact">
					<label for='email'>Email Address:</label>
					<input type="text" name="email"> <br>
				</div>
				<div class="input-contact">
					<label for='message'>Message:</label> 
					<textarea name="message"></textarea>
				</div>
				
					<input type="submit" name="submit" value="Submit" />
					
			
			</form>
	</div>

<script language="JavaScript">

	
	var frmvalidator  = new Validator("contactform");

	frmvalidator.addValidation("name","req","Please provide your name"); 
	frmvalidator.addValidation("email","req","Please provide your email"); 
	frmvalidator.addValidation("email","email","Please enter a valid email address"); 
	frmvalidator.addValidation("message","req","Please provide your message"); 

</script>


</body>
</html>