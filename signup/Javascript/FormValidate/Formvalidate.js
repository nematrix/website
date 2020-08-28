function Usr_profile(){

	var FirstName = document.forms['Signup']['fname'].value;
	if(FirstName==""){
		document.getElementById('Firstname_note').innerHTML = "hello";
	}

	var LastName = document.forms['Signup']['Lname'].value;
	if(LastName==""){
		document.getElementById('Lastname_note').innerHTML = "hellod";
	}
}