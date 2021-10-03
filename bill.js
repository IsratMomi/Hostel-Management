var amount;
var yearAmount;
function enableMonth(){
    if(document.getElementById('mon').checked && document.getElementById('month').disabled){
        document.getElementById('month').disabled = false;
    }else{
        document.getElementById('month').disabled = true;
    }
}




function monthlyBill(){
	var discount;
	var tamount;
	var e = document.getElementById('select');
    var Stu_type = e.options[e.selectedIndex].value;
	var e = document.getElementById('select1');
    var roomType = e.options[e.selectedIndex].value;
	if(Stu_type == "Student"){
		 
		if(document.getElementById('mon').checked){
			if(roomType == "Single"){
			amount= 7000+200;
			
		}
			else if(roomType == "Double"){
			amount= 7000+100;
		}
			else {
			amount= 7000;
			
			}
		}
		else{
			if(roomType == "Single"){
			tamount= 5000;
			discount = tamount*0.1;
			amount= 200+(tamount-discount);
			
		}
		else if(roomType == "Double"){
			tamount= 5000;
			discount = tamount*0.1;
			amount= (tamount-discount)+100;
		}
		else {
			tamount= 5000;
			discount = tamount*0.1;
			amount= tamount-discount;
		}
		}
		
	}
	else{
		if(roomType == "Single"){
			tamount= 5000;
			discount = tamount*0.05;
			amount= 200+(tamount-discount);
			
		}
		else if(roomType == "Double"){
			tamount= 5000;
			discount = tamount*0.05;
			amount= (tamount-discount)+100;
		}
		else {
			tamount= 5000;
			discount = tamount*0.05;
			amount= tamount-discount;
		}
	}
	document.getElementById('resultBill').innerHTML = "<b>Monthly bill is:</b>" +amount; 
	
	}
function yearlyBill(){
	var e = document.getElementById('select');
    var Stu_type = e.options[e.selectedIndex].value;
	var e = document.getElementById('select1');
    var roomType = e.options[e.selectedIndex].value;
	var mont = document.getElementById('month').value;
	if(Stu_type == "Student"){
		 
		if(document.getElementById('mon').checked){
			if(roomType == "Single"){
			
			amount= 7000+200;
			yearAmount= amount*mont;
			
		}
			else if(roomType == "Double"){
			
			amount= 7000+100;
			yearAmount= amount*mont;
		}
			else {
			amount= 7000;
			yearAmount= amount*mont;
			}
		}
		else{
			if(roomType == "Single"){
			tamount= 5000;
			discount = tamount*0.1;
			amount= 200+(tamount-discount);
			yearAmount= amount*12;
			
		}
		else if(roomType == "Double"){
			tamount= 5000;
			discount = tamount*0.1;
			amount= (tamount-discount)+100;
			yearAmount= amount*12;
		}
		else {
			tamount= 5000;
			discount = tamount*0.1;
			amount= tamount-discount;
			yearAmount= amount*12;
		}
		}
		
	}
	else{
		if(roomType == "Single"){
			tamount= 5000;
			discount = tamount*0.05;
			amount= 200+(tamount-discount);
			yearAmount= amount*12;
			
		}
		else if(roomType == "Double"){
			tamount= 5000;
			discount = tamount*0.05;
			amount= (tamount-discount)+100;
			yearAmount= amount*12;
		}
		else {
			tamount= 5000;
			discount = tamount*0.05;
			amount= tamount-discount;
			yearAmount= amount*12;
		}
	}
	
	document.getElementById('resultBill').innerHTML = "<b>Monthly bill is:</b>" +yearAmount; 
	
}
