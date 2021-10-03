<?php
	session_start();
	include_once 'crud.php';
	$Crud = new crud();
	if(isset($_POST['login'])){
		$name = $_POST['name'];
		$pass = md5($_POST['pass']);
		$sql = "SELECT * FROM admin where name='$name' and pass = '$pass'";
		$result = $Crud->getData($sql);
		
		if(!empty($result)){
			$_SESSION['name']=$name;
			foreach($result as $res){
				$uname=$res['name'];
				$upass=$res['pass'];
				if($uname==$name && $upass==$pass){
					
					header('location:admin.html');
				}
				else{
					console.log($upass);
					header('location:login.php');
				}
			}
			
				
			
			//header('location:index.php');
		}
	}

?>
<html>
	<head>
	<title> Log in </title>
	<link rel = "stylesheet" type="text/css" href ="styleLog.css">
	<body>
		<div class ="loginbox">
		<img src="avatar.png" class="avatar">
			<h1> Login Here</h1><br>
			<form action="login.php" method="POST" onSubmit="return login(this);">
			<p> Username</p>
			<input type="text" name="name" placeholder="Enter Username">
			<p> Password</p>
			<input type="password" name="pass" placeholder="Enter Password">
			<input type="submit" name="login" value="Login"><br>
			<a href="adminReg.php">Don't have account?</a>
			</form>
		</div>
	</body>
	
	</head>
	
</html>