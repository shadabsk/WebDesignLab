<!DOCTYPE html>
<?php session_start();?>
<html>
<head>
	<title>Login Page</title>
	<style type="text/css">
		#login-box{
			width: 25%;
			margin: 0 auto;
			margin-top: 200px;
			border: 1px solid black;
			border-radius: 5px;
			padding: 20px;
			height: 120pt;
		}
		#login-box>input{
			display: block;
			width: 90%;
			margin: 0 auto;
			height: 20pt;
			margin-bottom: 10px;
			border-radius: 4px 4px 4px 4px;
		}
		#login-box>input[type="submit"]{
			width: 40%;
			height:	40px;
			background-color: #18C1A8;
			color: #ffffff; 
			border-radius: 4px;
		}
		span{
			display: block;
			text-align: center;
			margin-bottom: 10px;
		}
		#status{
			
		}
		.error{
			position: fixed;
			display: block;
			text-align: center;
			margin-top: 13%;
			margin-left: 42%;
		}
		.suc{
			position: fixed;
			display: block;
			text-align: center;
			margin-top: 13%;
			margin-left: 37%;
		}
	</style>
</head>
<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
<body>
	<?php
		if ($_POST)
		{
			$username=$_POST['username'];
			$pass=$_POST['pass'];
			if($username=="salman" && $pass=="12345")
			{
				?>
				<script>
				$(function () {
					$('#status').html('<center>Login Successful!Redirecting to blog page</center>').fadeIn().delay(2000).fadeOut();
				});
				</script>
			<?php
				$_SESSION['user']=$username;
				$_SESSION['college']="AIKTC";
				$_SESSION['class']="TE";
				$_SESSION['batch']="B4";
				header("Refresh:3,url=blog.php");
			}
			else
			{
				?>
				<script>
				$(function () {
					$('#status').html('<center>Incorrect username or password!</center>').fadeIn().delay(2000).fadeOut();
				});
				</script>
			<?php
				
			}
		}
	?>
	<form method="post" action="login.php">
		<div id="login-box">
			<span>Log In</span>
			<input type="text" name="username" id="username" placeholder="Username" required="required" />
			<input type="password" name="pass" id="pass" placeholder="Passsword" required="required" />
			<input type="submit" id="submit" value="Log In" />
			<div id='status'>
				
			</div>
		</div>
	</form>
	
	<script>
		$(document).ready(function() { 
			setTimeout(function() { 
				$('#div1').fadeOut(); 
		 }, 2000); 
		});
		$(document).ready(function() { 
			setTimeout(function() { 
				$('#div1').fadeOut(); 
		 }, 2000); 
		});

	</script>
</body>
</html>
