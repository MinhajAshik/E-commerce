<?php
$error='';
$name='';
$email='';
$subject='';
$message='';
function clean_text($string)
{
	$string=trim($string);
	$string=stripcslashes($string);
	$string=htmlspecialchars($string);
	return $string;

}
if(isset($_POST["submit"]))
{
	if(empty($_POST["name"]))
	{
		$error .='<p><label class="text-danger">Please Enter Your Name</label></p>';

	
	}
	else
	{
		$name=clean_text($_POST["name"]);
		if(!preg_match("/^[a-zA-Z ]*$/",$name))
		{
			$error .='<p><label class="text-danger">Only Letters and white space</label></p>';
		}

	}
	if(empty($_POST["email"]) )
	{
		$error .='<p><label class="text-danger">Please enter your email</label></p>';
	}
	else
	{
		$email=clean_text($_POST["email"]);
		if(!filter_var($email,FILTER_VALIDATE_EMAIL))
		{
			$error .='<p><label class="text-danger">Invalid  email</label></p>';
		}
	}
	if(empty($_POST["subject"]) )
	{
		$error .='<p><label class="text-danger">Subject is required </label></p>';
	}
	else
	{
		$subject=clean_text($_POST["subject"]);
	}
	if(empty($_POST["message"]) )
	{
		$error .='<p><label class="text-danger">Message is required </label></p>';

	}
	else
	{
		$message=clean_text($_POST["message"]);

	}
	if($error=='')
	{
		$file_open=fopen("contact_data.csv","a");
		$no_rows=count(file("contact_data.csv"));
		if($no_rows>1)
		{
			$no_rows=($no_rows-1)+1;
		}
		$form_data = array(
			'sr_no' =>$no_rows,
			'name'=> $name,
			'email'=>$email,
			'subject'=>$subject,
			'message'=>$message

        );
        fputcsv($file_open,$form_data);
        $error ='<p><label class="text-success">Thank You for your saupport </label></p>';
        $name='';
        $email='';
        $subject='';
        $message='';

	}

}
?>
<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>

	<title>Contact Us</title>
	<link rel="stylesheet" type="text/css" href="as.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>
<body>

	<Br/>
	<div class="container">
		<h1>AHOLA</h1>
        <h2>We are always ready to serve you!</h2> 		
		<br/>

		<div class="col-md-6" style="margin:0 auto;float:none;">
			<form method="post">
				<h3 align="center">Contact Us</h3>
				<br/>
				<?php echo $error; ?>
				<div class="form-group">
				    <label>Enter Name</label>
					<input type="text" name="name"  class="form-control" value="<?php echo $name;?>" />
			    </div>
			    	<div class="form-group">
					<label>Enter Email</label>
					<input type="text" name="email"  class="form-control" value="<?php echo $email;?>"/>
			    </div>
			    </div>
			    	<div class="form-group">
					<label>Enter Subject</label>
					<input type="text" name="subject"  class="form-control" value="<?php echo $subject;?>"/>
			    </div>
			    </div>
			    	<div class="form-group">
					<label>Enter Message</label>
					<textarea name="message"  class="form-control" value="<?php echo $message;?>"></textarea>
			    </div>
			    <div class="form-group" align="center">
			    	<input type="submit" name="submit"
			    	class="btn btn-info" value="Submit"/>
			    	
			    </div>

			</form>
			
		</div>

</body>
</html>
