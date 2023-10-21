         function validate() 
{

			var psd=/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[^a-zA-Z0-9])(?!.*\s).{8,15}$/;
			var ch=0;	
			var nm= /^[A-Za-z\s]*$/;
			var ph= document.signup.phone.value;
			var pin= document.signup.pincode.value;
			var mail =/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/; 

			
		if(!document.signup.name.value.match(nm))
		{
			document.getElementById('ername').innerHTML="*Name should contain alphabets!";
			document.signup.name.focus();
		}
		else 
		{
			document.getElementById('ername').innerHTML="";
			ch++;
		} 
	
		

		if (isNaN(ph))
		 {
			document.getElementById('erph').innerHTML="*Enter your phone number!";
			document.signup.phone.focus();
		}
		else 
		{
			document.getElementById('erph').innerHTML="";
			ch++;
		} 
			
		

		if(ph.length!=10)
		{
			document.getElementById('erph').innerHTML="*Phone number should have 10 digits!";
			document.signup.phone.focus();
		}
		else 
		{
			document.getElementById('ername').innerHTML="";
			ch++;
		} 
		
		if (isNaN(pin)||pin.length!=6) {
			document.getElementById('erpin').innerHTML="*Please enter a valid pin!";
			document.signup.pincode.focus();
		}
		else 
		{
			document.getElementById('erpin').innerHTML="";
			ch++;
		} 
		
		if (!document.signup.email.value.match(mail)) 
			{
			document.getElementById('ermail').innerHTML="*Invalid E-mail Format!";
			document.signup.email.focus();
		}
		else 
		{
			document.getElementById('ermail').innerHTML="";
			ch++;
		} 

		if (!document.signup.password.value.match(psd)) 
		{
			
			document.getElementById('erpass').innerHTML="*Password should contain 8-15 characters with atleast one lowercase letter,one uppercase letter,one numeric digit and one special character!!";
			document.signup.password.focus();
		}
		else 
		{
			document.getElementById('erpass').innerHTML="";
			ch++;
		} 

		if(!(document.signup.confirmpassword.value==document.signup.password.value))
		{
			document.getElementById('erconpass').innerHTML="*Should be same as Password!";
			document.signup.confirmpassword.focus();
		}
		else {
			document.getElementById('erconpass').innerHTML="";
			ch++;
		}

		if (document.signup.agreeterm.checked == false )
	    {
			document.getElementById('ercheck').innerHTML="*You should accept Terms and Conditions to create an account!";
			
		}
		else
		 {
			document.getElementById('ercheck').innerHTML="";
			ch++;
		}
		if(ch==8) {
			return true;
		}
		else {
			return false;
		}
		
	}		