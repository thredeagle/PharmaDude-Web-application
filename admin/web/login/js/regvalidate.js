<script>
function validate() 
{
			
			var nm= /^[A-Za-z]+$/;
			var ph= document.form-group.phone.value;
			var pin= document.form-group.pincode.value;
			var mail =/^ [a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,10}$ /;  

			
			if (!document.form-group.name.value.match(nm)) 
			{
			alert("Name should contain alphabets!");
			document.form-group.name.focus();
			return false;
		}
	
		

		if (isNaN(ph)||ph.length!=10)
		 {
			alert("enter your phone number");
			document.form-group.phone.focus();
			return false;
		}
		if (isNaN(pin)||pin.length!=6) {
			alert("Pls enter a valid PinCode");
			document.form-group.pincode.focus();
			return false;
		}
		if (!document.form-group.password.value.match(psd)) 
		{
			alert("*Password should contain 8-15 characters atleast one lowercase letter,one uppercase letter,one numeric digit and one special character!");
			document.form-group.password.focus();
			return false;
		}

		if (!document.form-group.email.value.match(mail)) 
			{
			alert("email id should be contain only alphabets digits with an @ and an extension followed by a (.)!");
			document.form-group.name.focus();
			return false;
		}

		if (document.label-agree-term.agree-term.checked == false ) {
			alert("Pls accept to our terms and conditions");
			
			return false;}

		}
			
	
	
	
	</script>