
<?php


$con = mysqli_connect('localhost', 'root', '','admin');

$name = $_POST['Name'];
$password = $_POST['Password'];


$sql = ("INSERT INTO `admininfo` VALUES ('$name','$password' )");

$rs = mysqli_query($con, $sql);

if($rs)
{
	echo "<p align='center'> <font color=white  size='6pt' body style='background-color:limegreen'> <br><br> Your form has been submitted  Our team will contact you soon<br><br> Thanks! </font> </p>";
		header("Refresh:5;url=contactform.html");
}
else
{
	echo "Error<br><br> Your Form has not been submitted please findout the mistake";
}

?>