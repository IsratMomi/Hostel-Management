<?php
	header('Access-Control-Allow-Origin: *');
    include_once "../classes/crud.php";
    $Crud = new crud();

        $name= $_POST['s_name'];
        $f_name = $_POST['s_fname'];
		$m_name = $_POST['s_mname'];
		$cont = $_POST['s_con'];
		$inst = $_POST['s_ins'];
		$room = $_POST['s_room'];
        $pass = md5($_POST['s_pass']);
		$sql = "INSERT into student_table(Student_name,Father,Mother,Contact,Institute_name,Room_no,password)
		VALUES('$name','$f_name','$m_name','$cont','$inst','$room ','$pass')";
       
        $result = $Crud->execute($sql);

        if($result){
            echo "success";
        }else{
            echo "Insertion problem";
        }
    
?>