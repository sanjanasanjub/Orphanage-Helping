    function formValidation()  
    {  
    // var uid = document.registration.userid;  
    // var passid = document.registration.passid;  
    var uname = document.registration.username;  
    // var uadd = document.registration.address;  
    // var ucountry = document.registration.country;  
	var uemail = document.registration.email; 
	var amt = document.registration.amt; 
	var ph = document.registration.ph; 
    var dont = document.registration.dont; 	
    var one = document.registration.one;  
    var mon = document.registration.mon;
	var yer = document.registration.yer;
	
	{
    if(allLetter(uname))  
    { 
	if(ValidateEmail(uemail))  
    { 
	if(allnumeric(amt))
	{	
	if(allnumeric(ph))  
    {  
    if(donationtype(dont))  
    {  
    if(methodtype(one,mon,yer))  
    {  
    }  
    }   
    }  
    }   
    }  
    }  
    return false;   
    } 
	
	/* function userid_validation(uid,mx,my)  
    {  
    var uid_len = uid.value.length;  
    if (uid_len == 0 || uid_len >= my || uid_len < mx)  
    {  
    alert("User Id should not be empty / length be between "+mx+" to "+my);  
    uid.focus();  
    return false;  
    }  
    return true;  
    }  
	*/
	
    /* function passid_validation(passid,mx,my)  
    {  
    var passid_len = passid.value.length;  
    if (passid_len == 0 ||passid_len >= my || passid_len < mx)  
    {  
    alert("Password should not be empty / length be between "+mx+" to "+my);  
    passid.focus();  
    return false;  
    }  
    return true;  
    }  
	*/
	
    function allLetter(uname)  
    {   
    var letters = /^[A-Za-z]+$/;  
    if(uname.value.match(letters))  
    {  
    return true;  
    }  
    else  
    {  
    alert('Username must have alphabet characters only');  
    uname.focus();  
    return false;  
    }  
    }  
    
	/*
	function alphanumeric(uadd)  
    {   
    var letters = /^[0-9a-zA-Z]+$/;  
    if(uadd.value.match(letters))  
    {  
    return true;  
    }  
    else  
    {  
    alert('User address must have alphanumeric characters only');  
    uadd.focus();  
    return false;  
    }  
    }  
    */
	
	// Email validation
	
	function ValidateEmail(uemail)  
    {  
    var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;  
    if(uemail.value.match(mailformat))  
    {  
    return true;  
    }  
    else  
    {  
    alert("You have entered an invalid email address!");  
    uemail.focus();  
    return false;  
    }  
    }
	
	// Phone number validation
		
	function allnumeric(ph)  
    {   
    var numbers = /^[0-9]+$/;  
    if(ph.value.match(numbers))  
    {  
    return true;  
    }  
    else  
    {  
    alert('phone number must have numeric characters only');  
    ph.focus();  
    return false;  
    }  
    }  
     
	// Amount validation
		
	function allnumeric(amt)  
    {   
    var numbers = /^[0-9]+$/;  
    if(amt.value.match(numbers))  
    {  
    return true;  
    }  
    else  
    {  
    alert('amount must have numeric characters only');  
    amt.focus();  
    return false;  
    }  
    }  
	
	// Donation type validation
	function donationtype(dont)  
    {  
    if(dont.value == "Default")  
    {  
    alert('Select your Donation Type from the list');  
    dont.focus();  
    return false;  
    }  
    else  
    {  
    return true;  
    }  
    }  
    
	// Donation maethod validation,i.e one,month or yearly donation
	function methodtype(one,mon,yer)  
    {  
    x=0;  
      
    if(one.checked)   
    {  
    x++;  
    } 
	if(mon.checked)  
    {  
    x++;   
    }
	if(yer.checked)  
    {  
    x++;   
    }  	
    if(x==0)  
    {  
    alert('Select your Donation Type');  
    one.focus();  
    return false;  
    }  
    else  
    {  
    alert('Form Succesfully Submitted');  
    window.location.reload()  
    return true;  
    }  
    }  