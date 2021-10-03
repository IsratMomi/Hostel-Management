<?php
    include_once "../classes/crud.php";
    $Crud = new crud();
    $result = $Crud->getData("SELECT * from student_table order by id DESC");
	
	if($result){
		echo "<table border='1' id='show_table'><tr><th>Student name</th>
		<th>Father name</th>
		<th>Mother name</th>
		<th>Contact</th>
		<th>Institute</th>
		<th>Room no</th>
		<th>Action</th></tr>";
		foreach($result as $row){
			echo "<tr><td >".$row['Student_name']."</td>";
			echo "<td>".$row['Father']."</td>";
			echo "<td>".$row['Mother']."</td>";
			echo "<td>".$row['Contact']."</td>";
			echo "<td>".$row['Institute_name']."</td>";
			echo "<td>".$row['Room_no']."</td>";
			echo "<td><button id='".$row['id']."' class='editView'>Edit</button> | <button id='".$row['id']."' class='delete'>Delete</button></td></tr> ";
		}
		echo "</table>";
	}else{
		echo "No Data Found! Please Add Data.";
	}
?>
<script type="text/javascript">
$(document).ready(function(){
	
	$('.editView').on('click',function(){
		var id = $(this).attr('id');
		//alert(id);
		$.ajax({
			url:"functions/edithost.php",
			type:"POST",
			data:{param_id:id},
			success: function(response){
				$('#edit_data').slideDown();
				$('#edit_data').html(response);
			}
		})
	})
	
	$('.delete').on('click',function(){
		var id = $(this).attr('id');
		//alert(id);
		$.ajax({
			url:"functions/deletehost.php",
			type:"POST",
			data:{param_id:id},
			success: function(response){
				//alert(response);
				if(response == "success"){
					$.get('functions/showhost.php',function(data){
						$('#show_data').html(data);
						
					})
				}
			}
		})
	})
	
	
})

</script>