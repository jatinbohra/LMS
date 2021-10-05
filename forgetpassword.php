<?php



?>
<!doctype html>
<html>
<head>
<title>Forget Password-LMS</title>
<link rel="icon" type="image/png" href="img/LMSlogo.png"/>

<style type="text/css">
*{
	padding:0;
	margin:auto;
	font-family: 'open sans', sans-serif;
}
.container{
	margin-top:10px;
	margin-left:270px;
	padding:26px;
	width:800px;
}

input[type=text], input[type=password] {
  width: 90%;
  padding: 15px;
  margin: 5px 0 10px 1px;
  border: none;
  background: #f1f1f1;
}

.btn {
  background-color: #ff0000;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  border-radius: 5px;
  opacity: 0.9;
  
}
.btn:hover {
  opacity: 0.7;
}

</style>
</head>
<body 
<form action="#" class="container">
<h2><center>-: Forget Password :-</center></h2>
<br>
	<label for="email" class="text1">Email:</label>
	<br> 
    <input type="text" autocomplete="off" name="email" placeholder="Enter Email" id="email">
	<br>
    <label for="psw">Password:</label>
    <input type="password"  placeholder="Enter Password" name="psw" id="psw">
	<br>
    <label for="pwd">New Password:</label>
    <input type="password"  placeholder="Enter New password" name="npsw" id="npsw">
	<br>
	<input type="submit" class="btn" value="Update Password">
	<input type="reset" class="btn" value="Reset" onclick="customReset();"/>
	
	</form>
	
	<script>
	function customReset()
	{
		document.getElementById("email").value="";
		document.getElementById("psw").value="";
		document.getElementById("npsw").value="";
		
		
	}
	</script>
		<!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
	<!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
    -->
</body>
</html>