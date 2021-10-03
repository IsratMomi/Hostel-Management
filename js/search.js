$(document).ready(function(){
	
	$('#add_data').hide();
	
	$.get('functions/searchInfo.php',function(data){
		$('#show_data').html(data);
	})
	
	$('#addData').click(function(){
		
		var name = $('#name').val();
		var f_name = $('#f_name').val();
		var m_name = $('#m_name').val();
		var cont = $('#cont').val();
		var inst= $('#inst').val();
		var room = $('#room').val();
		var pass = $('#pass').val();
		//console.log(name);
		$.ajax({
			url:"functions/addhost.php",
			type:"POST",
			data:{s_name:name,s_fname:f_name,s_mname:m_name,s_con:cont,s_ins:inst,s_room:room,s_pass:pass },
			success: function(response){
				//console.log(response);
				if(response == "success"){
					$('#name').val('');
					$('#f_name').val('');
					$('#m_name').val('');
					$('#cont').val('');
					$('#inst').val('');
					$('#room').val('');
					$('#pass').val('');
					$('#add_data').slideUp();
					$.get('functions/searchInfo.php',function(data){
						$('#show_data').html(data);
					})
					
				}
				
			}
		})
	})
	
})