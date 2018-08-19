function verifylogin() {
			//for field must take some input
			var usernametxt = login.username.value;
			
            if (usernametxt == "") {
                document.login.username.focus();
				document.getElementById("errorUsernmaeMsg").innerHTML = "<img src='images/wrong.png' width='20px' height='20px' />";
				alert("username can't be empty");
                return false;
            }else{
				document.getElementById("errorUsernmaeMsg").innerHTML = "<img src='images/right.png' width='20px' height='20px' />";
			}
			
			var passtxt = login.pass.value;
			
            if (passtxt == "") {
                document.login.pass.focus();
				document.getElementById("errorPassMsg").innerHTML = "<img src='images/wrong.png' width='20px' height='20px' />";
				alert("password can't be empty");
                return false;
            }else{
				document.getElementById("errorPassMsg").innerHTML = "<img src='images/right.png' width='20px' height='20px' />";
			}
			
			
			return true;
}



function verify() {
			//for field must take some input

            if (document.contact.username.value == "") {
                document.contact.username.focus();
				document.getElementById("errorUsernmaeMsg").innerHTML = "<img src='images/wrong.png' width='20px' height='20px' />";
				alert("Please give the username");
                return false;
            }else{
				document.getElementById("errorUsernmaeMsg").innerHTML = "<img src='images/right.png' width='20px' height='20px' />";
			}
			
			var emailtxt = contact.email.value;
			
			if(!validateEmail(emailtxt)){	
				document.getElementById("errorEmailMsg").innerHTML = "<img src='images/wrong.png' width='20px' height='20px' />";
				alert("Invalid Email address");
				return false;
			}else{
				document.getElementById("errorEmailMsg").innerHTML = "<img src='images/right.png' width='20px' height='20px' />";
			}
		  
			if (document.contact.subject.value == "") {
				document.getElementById("errorSubjMsg").innerHTML = "<img src='images/wrong.png' width='20px' height='20px' />";
                document.contact.subject.focus();
				alert("Please give the subject");
                return false;
            }else{
				document.getElementById("errorSubjMsg").innerHTML = "<img src='images/right.png' width='20px' height='20px' />";
			}
			
						
			if (document.contact.msg.value == "") {
				document.getElementById("errorMsgMsg").innerHTML = "<img src='images/wrong.png' width='20px' height='20px' />";
                document.contact.msg.focus();
				alert("Please write a Message");
                return false;
            }else{
				document.getElementById("errorMsgMsg").innerHTML = "<img src='images/right.png' width='20px' height='20px' />";
			}
			
          
			alert("From Successfully Submitted");
			
            return true;

        }
	
function validateEmail(email) {
    var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(String(email).toLowerCase());
}