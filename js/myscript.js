function enableButton(){
	if(document.getElementById("checkBox").checked){
	 document.getElementById("submit-btn").disabled=false;
	}
	else{
		 document.getElementById("submit-btn").disabled=true;
	}
};