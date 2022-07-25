<!DOCTYPE html>
<html>
<head>
<title>RTO Karnataka</title>
<!--css-->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="css/ken-burns.css" type="text/css" media="all" />
<link rel="stylesheet" href="css/animate.min.css" type="text/css" media="all" />
<!--css-->

<style>
/*form {
    border: 50px solid #f1f1f1;
}*/

input[type=text], input[type=password] {
    width: 30%;
    padding: 12px 20px;
    margin: 8px 8px;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
	align: center;
}

button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 30%;
}

button:hover {
    opacity: 0.8;
}

.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}

.imgcontainer {
    text-align: center;
    margin: 24px 24px 12px 24px;
}

img.avatar {
    width: 20%;
    border-radius: 50%;
}

.container {
    padding: 16px;
}

span.psw {
    float: right;
    padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}
</style>



<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="RTO WEB TEMPLATE" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--js-->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!--js-->
<!--webfonts-->
<link href='//fonts.googleapis.com/css?family=Cagliostro' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!--webfonts-->
</head>
<body>
	<!--header-->
		<div class="header">
			<div class="container">
				<nav class="navbar navbar-default">
					<div class="container-fluid">
				<!---Brand and toggle get grouped for better mobile display--->
						<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							<div class="navbar-brand">
								<h1><a href="home.html">RTO <span>Karnataka</span></a></h1>
							</div>
						</div>
					</div>
				</nav>
			</div>
		</div>
	<!--header-->
	<!-- banner -->
    <!--content-->
	<h2><p align="center"><font face="Arial Black" color="green">Add Citizen</font></p></h2>

    <?php
    $first_name = '';
    $middle_name='';
    $aadhar = '';
    $last_name='';
    $gender='';
    $dob='';
    $phone_no='';
    $mail_id='';
    if (isset($_POST['submit']))
    {   $conn = mysqli_connect("localhost","root","");
        mysqli_select_db($conn,"dbms_p1");
        session_start();
        $aadhar = $_POST['aadhar'];
        $first_name=$_POST['first_name'];
        $middle_name=$_POST['middle_name'];
        $last_name=$_POST['last_name'];
        $gender=$_POST['gender'];
        $dob=$_POST['dob'];
        $phone_no=$_POST['phone_no'];
        $mail_id=$_POST['mail_id'];
        $q = "select * from citizen ";
        $res1=$conn->query($q);
        $row=mysqli_fetch_row($res1);
    
        
            $sql = "insert into citizen values('$first_name','$middle_name','$last_name',$aadhar,'$gender','$dob',$phone_no,'$mail_id') ";
            $res = $conn->query($sql);
            echo ("<SCRIPT LANGUAGE='JavaScript'>
							window.alert('citizen added succesfully')
							window.location.href='add_citizen.php'
							</SCRIPT>");
            

        }
    

?>
<!--<br><br>
 <p><form method="POST"  class="bg-light">
				        &emsp;&emsp;&emsp; <b>First name</b>: <input type="text" name="first_name" >
						<br><br>
                        &emsp;&emsp;&emsp; <b>middle name<b>: <input type="text" name="middle_name" >
						<br><br>
                        &emsp;&emsp;&emsp; last name: <input type="text" name="last_name" >
						<br><br>
                        &emsp;&emsp;&emsp; aadhar: <input type="text" name="aadhar" >
						<br><br>
                        &emsp;&emsp;&emsp; gender: <input type="text" name="gender" >
                         m/f
						<br><br>
                        &emsp;&emsp;&emsp; dob: <input type="text" name="dob" >
                         in yy-mm-dd format
						<br><br>
                        &emsp;&emsp;&emsp; phone no: <input type="text" name="phone_no" >
						<br><br>
                        &emsp;&emsp;&emsp; email id: <input type="text" name="mail_id" >
						<br><br>
                        &emsp;&emsp;&emsp;<button type="submit"  name="submit" class="btn btn-primary">Submit</button>
          			</form>	</p>-->
               
					  <form  method="post" align="center">

<div class="container">
  <label><b>First Name</b></label>
  <input type="text" placeholder="Enter first name" name="first_name" required>
  <br>
  <label><b>Middle Name</b></label>
  <input type="text" placeholder="Enter middle name" name="middle_name">
  <br>
  <label><b>Last name</b></label>
  <input type="text" placeholder="Enter last name" name="last_name" required>
  <br>
  <label><b>Aadhar</b></label>
  <input type="text" placeholder="Enter Aadhar" name="aadhar" required>
  <br>
  <label><b>Gender</b></label>
  <input type="text" placeholder="Enter m/f" name="gender" required>
  <br>
  <label><b>Dob</b></label>
  <input type="text" placeholder="Enter in yy-mm-dd format" name="dob" required>
  <br>
  <label><b>Phone</b></label>
  <input type="text" placeholder="Enter mob no" name="phone_no" required>
  <br>
  <label><b>Mail id</b></label>
  <input type="text" placeholder="Enter mail id" name="mail_id" required>
  <br>
	  
  <button type="submit" name="submit">Submit</button>
</div>

</form>




    <!--content-->
    <!--footer-->
	<div class="footer-w3">
				<div class="container">
					<div class="footer-grids">
						<div class="col-md-8 footer-grid">
							<h4>About Us</h4>
							<p>  Organisation of the Indian government responsible for maintaining a database of drivers and a database of vehicles for Karnataka.<span>
							    It issues driving licences, organises collection of vehicle excise duty and sells personalised registrations.
                  It also is responsible to inspect vehicle's insurance and clear the pollution test.</span></p>
						</div>
						<div class="col-md-4 footer-grid">
						<h4>Information</h4>
							<ul>
								<li><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>Bengaluru</li>
								<li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>080 2956789</li>
								<li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a href="mailto:karnataka@rto.com"> karnataka@rto.com</a></li>
								<li><i class="glyphicon glyphicon-time" aria-hidden="true"></i>Mon-Sat 10:00 hr to 17:00 hr</li>
							</ul>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
		<!--footer-->
		<!---copy--->
			<div class="copy-section">
				<div class="container">
					<div class="social-icons">
						<a href="#"><i class="icon1"></i></a>
						<a href="#"><i class="icon2"></i></a>
						<a href="#"><i class="icon3"></i></a>
						<a href="#"><i class="icon4"></i></a>
					</div>
				</div>
			</div>
			<!---copy--->
</body>
</html>