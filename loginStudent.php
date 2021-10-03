<?php
	session_start();
	include_once 'crud.php';
	$Crud = new crud();
	if(isset($_POST['login'])){
		$name = $_POST['name'];
		$pass = md5($_POST['pass']);
		$sql = "SELECT * FROM student_table where Student_name='$name' and password = '$pass'";
		$result = $Crud->getData($sql);
		
		if(!empty($result)){
			$_SESSION['name']=$name;
			foreach($result as $res){
				$uname=$res['Student_name'];
				$upass=$res['password'];
				if($uname==$name && $upass==$pass){
					
					header('location:studentpage.html');
				}
				else{
					console.log($upass);
					header('location:loginStudent.php');
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
			<form action="loginStudent.php" method="POST">
			<p> Username</p>
			<input type="text" name="name" placeholder="Enter Username">
			<p> Password</p>
			<input type="password" name="pass" placeholder="Enter Password">
			<input type="submit" name="login" value="Login"><br>
			
			</form>
		</div>
	</body>
	
	</head>
	
</html>