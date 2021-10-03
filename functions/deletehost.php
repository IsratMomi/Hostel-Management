<?php
    include_once "../classes/crud.php";
    $Crud = new crud();

    $id = $_POST['param_id'];

    if($Crud->delete($id,'student_table')){
        echo "success";
    }
?>
