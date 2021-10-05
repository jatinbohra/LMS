<!doctype html>
<html>
<head>
<title>Student Registration-LMS</title>
<style type="text/css">
*{
	margin:0;
	padding:0;
	font-family: 'open sans', sans-serif;
}
.container{
	position:absolute;
	margin: 20px 100px 20px 300px;
	
    width: 60%;
	height:auto;
	padding: 16px;
	background-color: rgb(229, 228, 226,0.5);
}
input[type=text], input[type=password], input[type="email"], input[type="tel"], input[type="date"] {
  width: 95.7%;
  padding: 15px;
  margin: 5px 0 10px 1px;
  border-style: groove;
  border-color:rgb(229, 228, 226,0.8)
 }
 .sel{
	 width: 100%;
	padding: 15px;
	margin: 5px 0 10px 1px;
	border-style: groove;
	border-color:rgb(229, 228, 226,0.8)
 }
 .btn {
  background-color: #4CAF50;
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
<div class="header">
	<h1><center>-: Registration Form :-</center></h1>
</div>
<form class="container">
Name:<input type="text" name="name" placeholder="Enter your name">
<br>
Email:
<br><input type="email" name="email" placeholder="Enter your email">
<br>
<label>Address:</label>
<br>
<textarea id="w3review" name="w3review" rows="4" cols="113">
 </textarea>
 <br>
 <label for="state">State:</label>
 <br>
<select class="sel" name="state" id="staten">
  <option>Select State</option>
  <option>Rajasthan</option>
  <option>Gujarat</option>
  <option>Maharashtra</option>
  <option>Goa</option>
  <option>Jammu and Kashmir</option>
   <option>Himachal Pradesh </option>
 <option> Punjab</option>
 <option> Haryana</option>
 <option> Uttarakhand</option>
 <option> Uttar Pradesh</option>
 <option> Bihar</option>
 <option> Madhya Pradesh</option>
 <option> Pune</option>
 <option> Karnataka</option>
 <option> Telangana</option>
 <option> Andhra Pradesh</option>
 <option> Tamil Nadu</option>
 <option> Kerala</option>
 </select>
 <br>
 Country:<input type="text" name="country" placeholder="Enter country name">
 <br>
 Phone no:<input type="tel" name="telphone"  pattern="[0-9]{10}"  title="Ten digits code" required/>    
   <br>
Birthday:<input type="date" id="birthday" name="birthday">   
 <br>
 Gender<br>
 <select class="sel" name="sex" id="sex">
 <option>Select Gender</option>
  <option>Male</option>
  <option>Female</option>
  </select>
		  <br>
 <label for="course">Course:</label>
 <br>
<select class="sel"name="state" id="staten">
  <option>Select Course</option>
  <option>Mca</option>
  <option>Msc IT</option>
  <option> Msc</option>
  <option> M.Tech</option>
  <option> Mba</option>
  <option> M.com</option>
  <option> MA</option>
  </select>
  <br>
  Password:<input type="password"  placeholder="Enter Password" id="psw">
	<br>
  New Password:<input type="password"  placeholder="Enter New password" id="pwd">
	<br>
	<input type="submit" class="btn" value="Submit">
</form>  
</body>
</html>