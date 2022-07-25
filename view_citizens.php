<!DOCTYPE HTML>
<html>
<title>Complaints</title>
<body>
<p><h1><b><u>RTO Karnataka: Complaints Table</u></b></h1></p>
<p><a href="rto_admin.php"><font color="blue" size="5"><b>Back</b></font></a>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;

<a href="admin_logout.php"><font color="blue" size="5"><b>Logout</b></font></a></p>
<?php
				session_start();
				$username=$_SESSION['username'];
				$conn = mysqli_connect("localhost","root","");
				if (mysqli_connect_errno())
				{
					echo "Failed to connect to MySQL: " . mysqli_connect_error();
				}

				mysqli_select_db($conn,"dbms_p1");
				
$sql1 = "SELECT first_name,last_name,aadhar,phone_no,dob,mail_id FROM citizen";

$result1 = $conn->query($sql1);

$body="Complaint";
$subject="RTO Complaint Update";

if($result1){
echo '<div align="center"><table align="left" border="2"
cellspacing="2" cellpadding="10">

<tr>
<td align="left"><b>Aadhaar No</b></td>
<td align="left"><b>first Name</b></td>
<td align="left"><b>Last Name</b></td>
<td align="left"><b>phone_no</b></td>
<td align="left"><b>dob</b></td>
<td align="left"><b>mail_id</b></td>
</tr></div>';

while($row = mysqli_fetch_array($result1)){
$link=$row['mail_id'];
echo '<div align="center"><tr><td align="left">' . 
$row['aadhar'] . '</td><td align="left">' . 
$row['first_name'] . '</td><td align="left">' .
$row['last_name'] . '</td><td align="left">' . 
$row['phone_no'] . '</td><td align="left">' . 
$row['dob'] . '</td><td align="left">' . 
'<a href="mailto:'.$row['mail_id'].'?subject='.$subject.'&body='.$body.'">'.$row['mail_id'].'</a>'.'</td><td align="left"></td></tr></div>';
//echo '</tr>';
}

echo '</table><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>';

} else {

							echo ("<SCRIPT LANGUAGE='JavaScript'>
							window.alert('Couldn't fetch the data')
							window.location.href='rto_admin.php'
							</SCRIPT>");

}

mysqli_close($conn);
?>
<br>
</body>
</html>
