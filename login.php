<?php




?>
<!DOCTYPE html>
<html>
<head>
<title>Login-LMS</title>
<link rel="icon" type="image/png" href="img/LMSlogo.png"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style type="text/css">
*{
 padding:0;
 margin:0;
 font-family: 'open sans', sans-serif;
}
.bg-img {
  /* The image used */
  background-image: url("img/Pugate1.jpg");
  width:100%;
  height:100vh;
  background-size: 100% 100%;
  background-color: transparent;
  position:relative;
}
.clgname{
	position:absolute;
	width:100%;
	text-align:center;
	
}
.container{
	position:absolute;
	margin-top:220px ;
	margin-left:460px;
	width:400px;
	padding: 16px;
	background-color: rgb(229, 228, 226,0.8);
}
input[type=text], input[type=password] {
  width: 90%;
  padding: 15px;
  margin: 5px 0 10px 1px;
  border: none;
  background: #f1f1f1;
  
}
.btn {
  background-color: DodgerBlue;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}
.btn:hover {
  opacity: 1;
}

</style>
</head>
<body>
<div class="bg-img">
	<div class="clgname">
		<h1>PARUL UNIVERSITY</h1>
		<h3>FAULTY OF IT AND COMPUTER SCIENCE<br>
		P.o.Limda, Tal. Waghodia, Vadodara-391760, Gujarat(India)</h3>
	</div> 
	<form class="container" name="login1">
	<h2><center><u>Leave Management System</u></center></h2>
	<br>
	<h3><center>-: Login :-</center></h3>
<br>
    <label for="email"><b>Email/Username</b></label>
    <input type="text" placeholder="Enter Username" autocomplete="off" name="name">
	
    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" >
	<br>
	<a href="forgetpassword.php" style=" margin:6px 0 5px 0.; color:blue; text-decoration: none;" >Forget Passoword?</a>
    <br>
	<button type="submit" name="login" class="btn">Login</button>
	<br>
	<center>Not a member? <a href="A_registration.php" style="color:blue; 
	text-decoration: none;" > Signup now</a></center>
	
	</form>
</div>

</body>
</html>
