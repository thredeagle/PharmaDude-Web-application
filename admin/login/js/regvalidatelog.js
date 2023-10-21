         function validate() 

         alert("hi");
{

			var psd=/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[^a-zA-Z0-9])(?!.*\s).{8,15}$/;
			var ch=0;	
			var mail =/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/; 


	

		if (!document.signup-form.email.value.match(mail)) 
			{
			document.getElementById('ermail').innerHTML="*Invalid E-mail Format!";
			document.signup.email.focus();
		}
		else 
		{
			document.getElementById('ermail').innerHTML="";
			ch++;
		} 

		if (!document.signup-form.password.match(psd)) 
		{
			
			document.getElementById('erpass').innerHTML="*Password should contain 8-15 characters with atleast one lowercase letter,one uppercase letter,one numeric digit and one special character!!";
			document.signup.password.focus();
		}
		else 
		{
			document.getElementById('erpass').innerHTML="";
			ch++;
		} 



		if(ch==2) {
			return true;
		}
		else {
			return false;
		}
		
	}		