<!DOCTYPE html>

<html>
<head>
<script type="text/javascript">
function checkInfo() {
	
   
   var a = document.getElementById("name").value;
   var b = document.getElementById("email").value;
   var c = document.getElementById("message").value;
   
   
   var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/; 
   
   if (a == "") {
	   
	   alert("Please enter a name!");
	   return false;
   }
   
   if (b == "") {
	   
	   alert("Please enter your email address!");
	   return false;
   }
   
   if (reg.test(b) == false) 
   {
	  document.getElementById("email").style.color = "red";
      alert('Invalid Email Address');
      return false;
   }
   
   if (c == "") {
	   
	   alert("Please enter a message!");
	   return false;
   }
   
   
  
}

</script>
<title>PHP Coding Test</title>
<link rel="stylesheet" href="styles.css">
</head>
<body>
<h1>PHP Coding Test</h1>

<h2>
Enter information on the form
</h2>

<p>
  <div class="content">
    <form action="enter-a.php" method="POST"  name="enter-form" id="enter-form" target="_self">
	   <table>
	    <tr><td>Name:</td><td><input type="text" name="name" size="90" id="name" ></td></tr>
		<tr><td>&nbsp;</td><td>&nbsp;</td></tr>
		<tr><td>Email:</td><td><input type="text" name="email" size="45" id="email"></td></tr>
		<tr><td>&nbsp;</td><td>&nbsp;</td></tr>
		<tr><td valign="top">Message:</td><td><textarea name="message"  rows="10" cols="100" id="message"></textarea></td></tr>
		<tr><td>&nbsp;</td><td>&nbsp;</td></tr>
		<tr><td>&nbsp;</td><td><input type="submit" name="submit" onclick="checkInfo()" value="Submit a message"></td></td></tr>
	   </table>
	   
	</form>  
  </div>
</p>


</body>
</html>
