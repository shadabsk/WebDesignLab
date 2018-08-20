function checkEmail(e){
	var element=e.target;
	if(/[^a-zA-Z0-9@._]/.test(element.value)){
		alert("Email is invalid! Only characters a-z  A-Z  0-9  @  . _ are allowed.");
		element.value="";
		return false;
	}
	if(!/[a-zA-Z]/.test(element.value)){
		alert("Email is invalid! a-z or A-Z characters are must");
		element.value="";
		return false;
	}
	if(!/[@]/.test(element.value)){
		alert("Email is invalid! You are missing @");
		element.value="";
		return false;
	}
	if(!/[.]/.test(element.value)){
		alert("Email is invalid! .domain name is missing");
		element.value="";
		return false;
	}
	return true;
}

function checkSubject(e){
	var element=e.target;
	if(/[^a-zA-Z ]/.test(element.value)){
		alert("Invalid Subject. Use only a-z or A-Z");
		element.value="";
		return false;
	}
	return true;
}

function submitForm(e){
	e.preventDefault();
	if(document.getElementById('user-email').value!="" && document.getElementById('subject').value!="" && document.getElementById('message').value!=""){
		var contact=document.getElementsByClassName('contact-form');
		contact[0].innerHTML = "<h3>Thank You for Feedback. I'll get to you shortly</h3>";	
	}
	
}

var email = document.getElementById('user-email');
email.addEventListener('blur',checkEmail,false);

var subject = document.getElementById('subject');
subject.addEventListener('blur',checkSubject,false);

var submit = document.getElementById('submit-btn');
submit.addEventListener('click',submitForm,false);







