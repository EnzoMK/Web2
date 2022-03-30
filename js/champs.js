const email = document.getElementById('mailetudiant');

form.addEventListener('submit', e => {
	e.preventDefault();
	
	checkInputs();
});

function checkInputs() {
	// trim to remove the whitespaces
	const emailValue = email.value.trim();
	
	if(emailValue === '') {
		setErrorFor(email, 'Email cannot be blank');
	} else if (!isEmail(emailValue)) {
		setErrorFor(email, 'Not a valid email');
	} else {
		setSuccessFor(email);
	}
	
}

function setErrorFor(input, message) {
	const formControl = input.parentElement;
	const small = formControl.querySelector('small');
	formControl.className = 'form-control error';
	small.innerText = message;
}

function setSuccessFor(input) {
	const formControl = input.parentElement;
	formControl.className = 'form-control success';
}
	
function isEmail(email) {
	return /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(email);
}

function valider()     
{

		  if (document.code_postal.cp.value.length < 5 && document.code_postal.cp.value.length > 0 )
		  {
		  alert("Indiquez un code postal à 5 chiffres");
		  return false;
		  }
		  if (document.code_postal.cp.value.length == 0)
		  {
		  alert("Indiquez un code postal");
		  return false;
		  }
		  if (isNaN(document.code_postal.cp.value)  == true)
		  {
		  alert("Un code postal ne peut pas contenir de lettres");
		  return false;
		  }
return true;     
} 