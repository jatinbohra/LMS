<?php



?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>S_profile-LMS</title>
	
	<link rel="icon" type="image/png" href="img/LMSlogo.png"/>
	
	<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"> -->
	<script src="http://code.jquery.com/jquery-3.4.1.min.js"></script>
	<script src="http://kit.fontawesome.com/b99e675b6e.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$(".hamburger").click(function(){
				$(".wrapper").toggleClass("collapse");
			});
		});
	</script>
	<style type="text/css">
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
	  		margin-top: 61px;
	  		margin-left: 240px;
	  		padding: 15px;
	  		transition: all 0.3s ease;
	  
	  		
	  	}

	  	.wrapper .main_container .item{
	  		background: #fff;
	  		margin-bottom: 50px;
	  		padding: 15px;
	  		font-size: 17px;
	  		line-height: 22px;
	  		 height: 100vh;
	  }


		.wrapper.collapse .sidebar{
			width: 69px;
		}

		.wrapper.collapse .sidebar ul li a{
			text-align: center;
	 	}

		.wrapper.collapse .sidebar ul li a span.icon{
			margin: 0;
	  	}

	  	.wrapper.collapse .sidebar ul li a span.title{
	  		display: none;
	  	}

	  	.wrapper.collapse .main_container{
	  		width: calc(100% - 70px);
	  		margin-left: 70px;
	  	}
	  	.phtos{
			display: block;
			margin: 10px 100px;
			width:50px;
			height: 50px;
			line-height: 50px;
			float: right;
	  	}
	  	.phtos img{
	  		height: 120px;
	  		width: 120px;
	  		border-radius: 60px;

	  	}
	  	
	  	

		.item p{
			margin-top: 10px;
			margin-left: 60px;
			font-size: 16px;
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
 			 <div class="container" style="text-align: center; font-size: 20px;  margin-bottom: 50px; " >
  				<h3>-: Student Profile :-</h3>
			</div>
			<div class="phtos">
				<img src="img/images.png" alt="Avatar" class="Avatar"><br>
				  <!--our custom file upload button-->
                <input type="file" id="upload"  hidden/>
				<label for="upload" style="font-size:14px;" >Change_img</label>
</div>
			
			<p>Name    : jatin bohra </p>
			<p>Email   :  jatinbohra15gmail.com</p>
			<p>Address :  vadodara</p>
			<p>State   :  gujarat</p>
			<p>Country :  india</p>
			<p>Mobile   : **********</p>
			<p>Dob     :  15-11-1999</p>
			<p>Gender  :  male</p>
			<p>Course  :  Mca</p>
			<p>Faculty  :  faculty of IT and computer science</p>
			</div>
		</div>
 	</div>
 </div>

</body>
</html>