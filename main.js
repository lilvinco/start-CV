function showForm(){
    document.getElementById("formbox").style.display = "block"
}
function closeBox(){
    document.getElementById("formbox").style.display = "none"
}

function validateForm() {

	var name = document.forms["contact-form"]["fullname"];               
	var email = document.forms["contact-form"]["email"];    
	var phone = document.forms["contact-form"]["subject"];  
	var what =  document.forms["contact-form"]["message"];  

	if (fullname.value == "")                                  
    { 
        window.alert("Please enter your name."); 
        name.focus(); 
        return false; 
    } 

    if (message.value.length <= 4 )                                  
    { 
        window.alert("Please enter more characters"); 
        name.focus(); 
        return false; 
    } 
       
    if (email.value == "")                                   
    { 
        window.alert("Please enter a valid e-mail address."); 
        email.focus(); 
        return false; 
    } 
   
    if (email.value.indexOf("@", 0) < 0)                 
    { 
        window.alert("Please enter a valid e-mail address."); 
        email.focus(); 
        return false; 
    } 
   
    if (email.value.indexOf(".", 0) < 0)                 
    { 
        window.alert("Please enter a valid e-mail address."); 
        email.focus(); 
        return false; 
    } 
   
   if (message.value.length <= 20 )                                  
    { 
        window.alert("Message must be greater than 20 characters"); 
        name.focus(); 
        return false; 
    } 
       
       else {return true;}
}