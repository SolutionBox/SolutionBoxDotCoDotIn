function validateForm(){
	
	var x=document.getElementById("name").value;
	var y=document.getElementById("college").value;
	var z=document.getElementById("email").value;
	var a=document.getElementById("contact").value;

if (x==null || x=="")
  {
  alert("Name must be filled out");
  return false;
  }
 if(y==null || y==""){
  alert("College name must be filled");
  return false;
  }

 	var atpos=z.indexOf("@");
	var dotpos=z.lastIndexOf(".");
if (atpos<1 || dotpos<atpos+2 || dotpos+2>=z.length)
  {
  alert("Not a valid e-mail address");
  return false;
  }
if(a==null || a==""){
  var phoneno = "/^\d{10}$/";  
  if(!(y.match(phoneno)))  
        {  
        alert("Phone number must be filled");  
        return false;  
        }  

  }



}

function contactForm(){
	
	var x=document.getElementById("name").value;
	var y=document.getElementById("message").value;
	var z=document.getElementById("email").value;
	var a=document.getElementById("phone").value;

if (x==null || x=="")
  {
  alert("Name must be filled out");
  return false;
  }


 	var atpos=z.indexOf("@");
	var dotpos=z.lastIndexOf(".");
if (atpos<1 || dotpos<atpos+2 || dotpos+2>=z.length)
  {
  alert("Not a valid e-mail address");
  return false;
  }
  
if(a==null || a==""){
  var phoneno = "/^\d{10}$/";  
  if(!(y.match(phoneno)))  
        {  
        alert("Phone number must be filled");  
        return false;  
        }  

  }


 if(y==null || y==""){
  alert("Message must be filled");
  return false;
  }


}