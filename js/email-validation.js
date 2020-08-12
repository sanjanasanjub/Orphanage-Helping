//email validation

function ValidateEmail(inputText)  
{  
var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;  
if(inputText.value.match(mailformat))  
{  
document.form1.text1.focus();  
return true;  
}  
else  
{  
alert("You have entered an invalid email address!");  
document.form1.text1.focus();  
return false;  
}  
} 

   //phone number validation

   function phonenumber(inputtxt)  
    {  
      var phoneno = /^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/;  
      if(inputtxt.value.match(phoneno))  
         {  
           return true;  
         }  
       else  
         {  
           alert("Not a valid Phone Number");  
           return false;  
         }  
    }  