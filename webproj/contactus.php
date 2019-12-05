<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine">
	<title>Web Project</title>
	<style type="text/css">
		body
		{
			background-image: url(bg3.jpeg);
			
		}
		input[type="text"],textarea
		{
			width: 50%;
			height:45px;
			border: 1px solid green;
		    border-radius: 15px;
		    background-color: transparent;
		    border-width: 2pt;
		    resize: vertical;

		}
		input[type="submit"]
		{
			border-radius: 10px;
			background-color: turquoise;
			width: 25%;
			height: 30px;
			border-color: black;
			border-width: 1pt;
			font-family: 'Georgia', serif;
		}
		label
		{
			
			width: 100%;
			font-family: 'Tangerine', serif;
  			font-size: 35px;

  			
		}
		p
		{
			font-size: 40px;
			padding-top: 10px;
			padding-bottom: 0px;
			font-family: 'Tangerine', serif;
  			font-size: 70px;
  			text-shadow: 4px 4px 3px #aaa;
		}
		.container 
		{
		    border-radius: 20px;
		    background-color: lightblue;
		    
		    width: 50%;
		    height: 650px;
		}
	</style>
</head>
<body>
	<form action="contactus.php"  method="POST">
		
		<center><div class="container">
		
		<p>Drop us a message!</p>
		<label>Name</label><br>
		<input type="text" name="name" placeholder=" Enter your good name" required/><br><br>
		<label>Phone No.</label><br>
		<input type="text" name="phone" placeholder=" Phone number"required/><br><br>
		<label>Email-id</label><br>
		<input type="text" name="email" placeholder=" Email-id"required/><br><br>
		<label>Message</label><br>
		<textarea name="comment" placeholder=" Your message..."required/></textarea><br><br>
		<input type="submit" name="sub" value="Submit">
		</div></center>
</form>

	<?php
	session_start();
	 $host ="localhost";
        $uname = "root";
        $pwd = '';
        $db_name = "cropinventory";
        $result = mysqli_connect($host,$uname,$pwd) or die("Could not connect to database." .mysqli_error());
        mysqli_select_db($result,$db_name) or die("Could not select the databse." .mysqli_error());
        if (isset($_POST['sub']))
        {
        	$name=$_POST['name'];
        	$phone=$_POST['phone'];
        	$email=$_POST['email'];
        	$comment=$_POST['comment'];
        	# code...
        	$query="INSERT INTO `contact_info`(`uname`, `phone_no`, `email_id`, `reason`) VALUES ('$name','$phone','$email','$comment') ";
        	
        	if (mysqli_query($result,$query)) 
        	{
		        echo '<p align="center" style="font-size:35px;color:red;">We have recorded your message. Thank You!</p>';
			}
			else
			{
		    	echo '<p align="center" style="font-size:25px;color:red;">  Insert CORRECT values! </p>';
			}
        }

        
        ?>
</body>
</html>