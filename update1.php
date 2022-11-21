<?php

$con = mysqli_connect('localhost', 'root', '','studentportal');

$name = $_POST['Name'];
$enroll = $_POST['Enroll'];
$mobile = $_POST['Mobile'];
$gender = $_POST['Gender'];
$email = $_POST['Email'];
$semester = $_POST['Semester'];



$sql = mysqli_query($con,"UPDATE  studentdata SET Name='$name',Enrollment='$enroll',Mobile='$mobile',Gender='$gender',Email='$email',Semester='$semester'  WHERE Enrollment='$enroll'"); 

if($sql)
{
	echo " Your data has been updated";
header("Refresh:5;url=welcomeadmin.php");
	
}

else
{
	echo " Error ! Your data has not been submiteed";
}