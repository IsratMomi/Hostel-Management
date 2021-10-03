<?php
    include_once "../classes/crud.php";
    $Crud = new crud();

    $id = $_POST['param_id'];
   
    $result = $Crud->getData("SELECT * from student_table where id=$id");
    foreach($result as $res){
      $name = $res['Student_name'];
	  $f_name = $res['Father'];
	  $m_name  = $res['Mother'];
	  $cont = $res['Contact'];
	  $inst = $res['Institute_name'];
	  $room= $res['Room_no'];
       
    }
?>

    <input id='e_student_name' value="<?php echo $name; ?>" type="text"></br>
    <input id='fname' value="<?php echo $f_name; ?>" type="text"></br>
	<input id='mname' value="<?php echo $m_name ; ?>" type="text"></br>
	<input id='con' value="<?php echo $cont; ?>" type="text"></br>
	<input id='insti' value="<?php echo $inst; ?>" type="text"></br>
	<input id='room_n' value="<?php echo $room; ?>" type="text"></br>
    <input type="button" name="update" class="update" value="Update Info"/>
   <input type="button" onclick="$('#edit_data').slideUp();" value="Cancel">
   <script type="text/javascript">
$(document).ready(function(){
	
	$('.update').on('click',function(){
		var id = "<?php echo $id; ?>";
		var name = $('#e_student_name').val();
		var f_name = $('#fname').val();
		var m_name = $('#mname').val();
		var cont = $('#con').val();
		var inst = $('#insti').val();
		var room = $('#room_n').val();
		$.ajax({
			url:"functions/updatehost.php",
			type:"POST",
			    //{param : value}
			data:{param_id:id,s_name:name,s_fname:f_name,s_mname:m_name,s_con:cont,s_ins:inst,s_room:room},
			success: function(response){
				if(response == "Success"){
					$('#name').val('');
					$('#f_name').val('');
					$('#m_name').val('');
					$('#cont').val('');
					$('#inst').val('');
					$('#room').val('');
					$('#edit_data').slideUp();
					$.get('functions/showhost.php',function(data){
						$('#show_data').html(data);
					})
				}
			}
		})
	})
	
	
})

</script>