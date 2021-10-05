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
	
    
    <title>T_registrationform-LMS</title>
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
	  		
	  		width: calc(100% - 225px);
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

	  @media screen and (max-width: 600px)
	  {
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
 			<li><a href="T_dashboard.php" style="text-decoration: none;">
 				<span class="icon"><i class="fas fa-chalkboard-teacher"></i></span>
 				<span class="title">Dashboard </span>
 			</a></li>                                                                       
 			<li><a href="T_leaveform.php" style="text-decoration: none;">
 				<span class="icon"><i class="fas fa-envelope-open-text"></i></span>
 				<span class="title">Leave Form</span>
 			</a></li>
			<li><a href="T_registration.php" style="text-decoration: none;">
 				<span class="icon"><i class="fab fa-wpforms"></i></span>
 				<span class="title">Registration Form</span>
 			</a></li>
 			<li><a href="T_leavelist.php" style="text-decoration: none;">
 				<span class="icon"><i class="fas fa-table"></i></span>
 				<span class="title">Leave list </span>
 			</a></li>
 			<li><a href="T_profile.php" style="text-decoration: none;">
 				<span class="icon"><i class="fas fa-user"></i></span>
 				<span class="title">Teacher Profile </span>
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
        <h2 class="text-center">-: Registration Form :-</h2>
        <form action="" method="POST">
            <div class="form-group">
                <label for="id">ID:</label>
                <input type="number" name="id" id="id" class="form-control" min="1" max="100">
            </div>
            <div class="form-group">
                <label for="name">Full Name:</label>
                <input type="text" name="name" id="name" class="form-control">
            </div>
            <div class="form-group">
                <label for="name">Email-id:</label>
                <input type="email" name="email" id="email" class="form-control">
            </div>
			 <div class="form-group">
                <label for="textarea">Address:</label>
                <textarea class="form-control" name="address" id="address" rows="3"></textarea>
            </div>
            <div class="form-group">
                <form class="form-inline">
                    <label class="my-1 mr-2" for="inlineFormCustomSelectPref">State:</label>
                    <select class="custom-select my-1 mr-sm-2" name="inlineFormCustomSelectPref" id="inlineFormCustomSelectPref">
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
                </form>
            </div>
			<div class="form-group">
                <label for="subject">Nationality:</label>
                <input type="text" name="country" id="country" class="form-control">
            </div>
			<div class="form-group">
                <label for="subject">Phone no:</label>
                <input type="tel" name="phone" id="phone" pattern="[0-9]{10}" class="form-control">
            </div>
			  <div class="form-group">
                <label for="textarea">DOB:</label>
                <input type="date" name="sdate" id="sdate" class="form-control">
            </div>
			<div class="form-group">
                <form class="form-inline">
                    <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Faculty:</label>
                    <select class="custom-select my-1 mr-sm-2" name="inlineFormCustomSelectPref" id="inlineFormCustomSelectPref">
					<option value="">Select Faculty</option>
					<option value="Faculty of Business Administration">Faculty of IT and Technology</option>
                        <option value="Faculty of Business Administration">Faculty of Business Administration</option>
                        <option value="Faculty of Engineering & Technology">Faculty of Engineering & Technology</option>
                        <option value="Faculty of Law">Faculty of Law</option>
                        <option value="Faculty of Medical Sciences">Faculty of Medical Sciences</option>
                    </select>
                </form>
            </div>
            <div class="form-group">
                <form class="form-inline">
                    <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Course:</label>
                    <select class="custom-select my-1 mr-sm-2" name="inlineFormCustomSelectPref" id="inlineFormCustomSelectPref">
					 <option>Select Course</option>
					 <option>Mca</option>
					 <option>Msc IT</option>
					 <option> Msc</option>
					 <option> M.Tech</option>
					 <option> Mba</option>
					 <option> M.com</option>
					 <option> MA</option>
                    </select>
                </form>
            </div>
			<div class="form-group">
                <form class="form-inline">
                    <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Gender:</label>
                    <select class="custom-select my-1 mr-sm-2" name="inlineFormCustomSelectPref" id="inlineFormCustomSelectPref">
					 <option>Select Gender</option>
					 <option>Male</option>
					 <option>Female</option>
                    </select>
                </form>
            </div>
			<div class="form-group">
                <label for="subject">Password:</label>
                <input type="text" name="country" id="country" class="form-control">
            </div>
			<div class="form-group">
                <label for="subject">New Password:</label>
                <input type="text" name="country" id="country" class="form-control">
            </div>
            <a href="" type="submit" name="sumbit"class="btn btn-primary btn-block">Submit</a>
		   </form>
          </div>
         </div>
        </div>
	   </div>
      </div>
    </body>
</html>