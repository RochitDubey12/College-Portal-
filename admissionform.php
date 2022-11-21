<svg class="icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 60 60"><circle class="circle" cx="30" cy="30" r="30" fill="none"/><path class="check" fill="none" d="m12.5 28l10.0 13 24-22.2"/></svg>
<style>
.icon {
  width: 100px;
  height: 100px;
  display: block;
  border-radius: 50%;
  stroke:green;
  margin: 50px auto;
  -webkit-animation: bounceIcon .17s ease-in-out;
  animation: bounceIcon .17s ease-in-out;
  -webkit-animation-delay: .25s;
  animation-delay: .25s;
}

.circle {
  stroke-dasharray: 300;
  stroke-dashoffset:  300;
  stroke-width: 9;
  stroke: black;
  fill: none;
  -webkit-animation: drawCircle .2s linear;
  animation: drawCircle .2s linear;
  -webkit-animation-fill-mode: forwards;
  animation-fill-mode: forwards;
}

.check {
  stroke-width: 7;
  stroke-dasharray:  300;
  stroke-dashoffset:  300;
  -webkit-animation: drawCheckmark .2s cubic-bezier(.89,.09,.91,.67);
  animation: drawCheckmark .2s cubic-bezier(.89,.09,.91,.67) forwards;
  -webkit-animation-delay: .2s;
  animation-delay: .2s;

}

@keyframes drawCircle {
 100% {
    stroke-dashoffset: 0;
  }
}

@keyframes drawCheckmark {
  100% {
    opacity: 1;
    stroke-dashoffset: 0;
  }
}

@keyframes bounceIcon {
  0% {
    transform: none;
  }
  50% {
    transform: scale3D(.9, .9, 1);
  }
  100% {
    transform: none;
  }
}


</style>
<?php

// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = mysqli_connect('localhost', 'root', '','studentadmission');

// get the post records
$name = $_POST['Name'];
$city = $_POST['City'];
$mobile = $_POST['Mobile'];
$gender = $_POST['Gender'];
$email = $_POST['Email'];




// database insert SQL code
$sql = ("INSERT INTO `admissioninfo` VALUES ('$name','$city','$mobile','$gender','$email' )");

// insert in database 
$rs = mysqli_query($con, $sql);

if($rs)
{
	echo "<p align='center'> <font color=white  size='6pt' body style='background-color:limegreen'> <br><br> Your form has been submitted  Our team will contact you soon<br><br> Thanks! </font> </p>";
		header("Refresh:5;url=admissionform.html");
}
else
{
	echo "Error<br><br> Your Form has not been submitted please findout the mistake";
}

?>