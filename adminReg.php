
<html>
<head>
	<title> Admin registration</title>
		<link rel = "stylesheet" type="text/css" href ="reg.css">
</head>
<body>
	<h1> Registration Form </h1>
	<div class="reg">
	<form action="adminReg.php" method="POST" id="reg">
		<h2> Register Here</h2>
		<label>Name:</label><br>
	    <input type="text" name="name" id="A_name" placeholder="Enter your name"/><br><br>
		<label>Contact:</label><br>
		<input type="text" name="con" id="cont" placeholder="Enter Contact no"/><br><br>
		<label>Email:</label><br>
		<input type="text" name="email" id="em" placeholder="Enter Your email"/><br><br>
		
		<label>Password:</label><br>
		<input type="password" name="pass" id="pass" placeholder="Enter Password"/><br><br>
	
	    <input type = "submit" name = "regist1" id="sub" value = "Submit"><br>
	</form>
	</div>
</body>
</html>
<?php
	include_once "crud.php";
	$Crud = new crud();
	if(isset ($_POST['regist1'])){
		$name = $_POST['name'];
		$con = $_POST['con'];
		$email=$_POST['email'];
		$pass = md5($_POST['pass']);
		$sql = "INSERT into admin(name,con,email,pass)
		VALUES('$name','$con','$email','$pass')";
		$result = $Crud->execute($sql);
		if($result){
			echo "Data added successfully";
			header('location:login.php');
		}
		else{
			echo "Insertion problem!";
		}
	}
	?>

