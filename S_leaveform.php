<?php




?>
<!DOCTYPE HTML>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
	<link rel="icon" type="image/png" href="img/LMSlogo.png"/>
	<script src="http://kit.fontawesome.com/b99e675b6e.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	
    <title>S_Leave Form-LMS</title>
<style>
        *{
			margin: 0px;
			 list-style:none;
			 padding:0;
			 text-decoration: none;
			 box-sizing: border-box;
			 font-family: 'Montserrat', sans-serif;
		}
		body{
			background: #e1ecf2;
			}
		.wrapper{
			margin: 10px;
		}	

		.wrapper .top_navbar{
			width:calc(100% - 20px);
			height: 60px;
			display: flex;
			position: absolute;
			top: 10px;
		}



		.wrapper .top_navbar .top_menu{
			width:100%;
			background: red;
			height: 100%;
			border-top-right-radius: 20px;
			border-top-left-radius: 20px;
			display: flex;
			justify-content: space-between;
			align-items: center;
			padding: 0 20px;
			box-shadow: 0 1px 1px  rgba(0,0,0,0.1);
			

		}

		.wrapper .top_navbar .top_menu .logo{
			color: #ffff;
			font-size: 22px;
			font-weight: 700;
			letter-spacing: 3px;
		

		}

		.wrapper .top_navbar .top_menu ul{
			display: inline;

		}

		.wrapper .top_navbar .top_menu ul li a{
			display: block;
			margin: 0 10px;
			width:35px;
			height: 35px;
			line-height: 35px;
			border:1px solid white;
			text-align: center;
			border-radius:50%;
			color:white ;
			}
		.wrapper .top_navbar .top_menu ul li a:hover{
			background:white;
			color:red;
		}

		
		.wrapper .sidebar{
			position: absolute;
			top:70px;
			left:10px
			background: #2e4ead;
			width: 250px;
			height: calc(100% - 80%);
			border-bottom-left-radius: 20px;
			transition: all 0.3s ease;
		}

		.wrapper .sidebar ul li a{
			display: block;
			padding: 27.8px;
			color: #fff;
			position: relative;
			margin-bottom: 1px;
			background: red;
			white-space: nowrap;
		}

		.wrapper .sidebar ul li a:before{
			content:"";
			position: absolute;
			top:0;
			left:0;
			width: 3px;
			height: 100%;
			background: #92a6e2;
			display: none;
		}

		.wrapper .sidebar ul li a span.icon{
			margin-right: 10px;
			display: inline-block;
		}

		.wrapper .sidebar ul li a span.title{
			display: inline-block;
		}

		.wrapper .sidebar ul li a:hover{
			background:#ff3333;
			color:#fff;
		}

		.wrapper .sidebar ul li a:hover:before{
			display: block;
		}

		.wrapper .main_container{
	  		
	  		width:82.5%;
	  		margin-top: 63px;
	  		margin-left: 240px;
	  		padding: 15px;
	  		transition: all 0.3s ease;
	  		height: 100%;
	  		
	  	}

	  	.wrapper .main_container .item{
	  		background: #fff;
	  		margin-bottom: 10px;
	  		padding: 15px;
	  		font-size: 17px;
	  		line-height: 22px;
	  		 height: auto;
	  }

	  @media screen and (max-width: 600px){

		.sidebar{
			width: 35px;
			height: 4px;
			background:#92a6e2;
			margin: 5px 0;
			border-radius: 5px;
		}
	


 }
 </style>
</head>
<body>
<div class="wrapper">
 	<div class="top_navbar">
 		
 		<div class="top_menu">
 			<div class="logo"><i class="fas fa-graduation-cap"></i>Leave Management System</div>
 			<ul>
 				
 				<li>
 					<a href="#" style="overflow: hidden; float: left;  " >
 					<i class="fas fa-bell"></i></a>
 				</li>
 				
 			</ul>
 		</div>
 	</div>
 	<div class="sidebar" >
 		<ul>
 			<li><a href="s_dashboard.php" style="text-decoration: none;">
 				<span class="icon"><i class="fas fa-chalkboard-teacher"></i></span>
 				<span class="title">Dashboard </span>
 			</a></li>
 			<li><a href="S_leaveform.php" style="text-decoration: none;">
 				<span class="icon"><i class="fas fa-envelope-open-text"></i></span>
 				<span class="title">Leave Form</span>
 			</a></li>
 			<li><a href="S_leavestatus.php" style="text-decoration: none;">
 				<span class="icon"><i class="fas fa-table"></i></span>
 				<span class="title">Leave Status </span>
 			</a></li>
 			<li><a href="S_profile.php" style="text-decoration: none;">
 				<span class="icon"><i class="fas fa-user"></i></span>
 				<span class="title">Student Profile </span>
 			</a></li>
 			<li><a href="index.php" style="text-decoration: none;">
 				<span class="icon"><i class="fas fa-share-square"></i></span>
 				<span class="title">Logout</span>
 			</a></li>
 		</ul>
	</div>
	
	
<div class="main_container">
	<div class="item">
	  <div class="container my-4">
        <h1 class="text-center">Student Leave Form</h1>
        <form action="" method="POST">
            <div class="form-group">
                <label for="id">Student ID</label>
                <input type="number" name="id" id="id" class="form-control" min="1">
            </div>
            <div class="form-group">
                <label for="name">Student Full Name</label>
                <input type="text" name="name" id="name" class="form-control">
            </div>
            <div class="form-group">
                <label for="name">Student Email</label>
                <input type="email" name="email" id="email" class="form-control">
            </div>
            <div class="form-group">
                <label for="name">Course</label>
                <input type="text" name="course" id="course" class="form-control">
            </div>
            <div class="form-group">
                <label for="year">Semester</label>
                <input type="number" name="semester" id="semester" class="form-control" min="1" max="8">
            </div>
            <div class="form-group">
                <label for="year">Year</label>
                <input type="number" name="year" id="year" class="form-control">
            </div>
            <div class="form-group">
                <form class="form-inline">
                    <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Faculty Department</label>
                    <select class="custom-select my-1 mr-sm-2" name="inlineFormCustomSelectPref" id="inlineFormCustomSelectPref">
					<option value="Faculty of Business Administration">Faculty of IT and Technology</option>
                        <option value="Faculty of Business Administration">Faculty of Business Administration</option>
                        <option value="Faculty of Engineering & Technology">Faculty of Engineering & Technology</option>
                        <option value="Faculty of Law">Faculty of Law</option>
                        <option value="Faculty of Medical Sciences">Faculty of Medical Sciences</option>
                    </select>
                </form>
            </div>
            <div class="form-group">
                <label for="subject">Subject</label>
                <input type="text" name="subject" id="subject" class="form-control">
            </div>
            <div class="form-group">
                <label for="textarea">Reason For Leave</label>
                <textarea class="form-control" name="reason" id="reason" rows="3"></textarea>
            </div>
            <div class="form-group">
                <label for="textarea">Start Date</label>
                <input type="date" name="sdate" id="sdate" class="form-control">
            </div>
            <div class="form-group">
                <label for="textarea">End Date</label>
                <input type="date" name="edate" id="edate" class="form-control">
            </div>
            <a href="" type="submit" name="sumbit"class="btn btn-primary">Apply</a>
			<input type="reset" class="btn btn-primary" value="Reset" onclick="customReset();"/>
        </form>
    </div>
</div>
</div>

<script>
	function customReset()
	{
		document.getElementById("id").value="";
		document.getElementById("name").value="";
		document.getElementById("email").value="";
		document.getElementById("course").value="";
		document.getElementById("semester").value="";
		document.getElementById("year").value="";
		document.getElementById("inlineFormCustomSelectPref").value="";
		document.getElementById("subject").value="";
		document.getElementById("reason").value="";
		document.getElementById("sdate").value="";
		document.getElementById("edate").value="";
		
		
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