<?php
    include_once "../classes/crud.php";
    $Crud = new crud();
        $name= $_POST['s_name'];
        $f_name = $_POST['s_fname'];
		$m_name = $_POST['s_mname'];
		$cont = $_POST['s_con'];
		$inst = $_POST['s_ins'];
		$room = $_POST['s_room'];
        $id = $_POST['param_id'];
        $sql = "Update student_table SET Student_name='$name',Father='$f_name',Mother='$m_name',Contact='$cont',Institute_name='$inst',Room_no='$room' where id=$id";

        $result = $Crud->execute($sql);

        if($result){
           echo "Success";
            
        }else{
            echo "Update problem";
        }
  
?>