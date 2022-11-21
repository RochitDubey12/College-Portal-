<html>
<head>
    <link rel ="stylesheet" type="text/css" href="welcomelogin.css">
<title>Peace</title>
<head>
	<body>
<div id="header">
<div id="con1">
    <img src="headerforportal.png" height="100%" width="100%">
</div>
<div id="con2">
    <br>
<span style="font-family:impact;color:#000080; font-size:50px;margin-left:100px;">PEACE - The College Of Science & Management</span>
<br><br>

<b><b><span style="font-family:Sabon Next LT;color:black; font-size:20px;margin-left:180px;">AICTE Approved, S P Pune University Program & Institute Code - MB6174-TIMR</b></b></span>
</div>
<div id="con3">
    <img src="headerforportal.png" height="100%" width="100%">
</div>
</div>
<center>
	<br><br>
<?php

session_start();

echo "<b>Welcome".' ' .$_SESSION["Name"]; 
?>
</center>
<br><br>
<div class="box">
	<a class="button" href="#popup1">NOTIFICATION</a>
</div>

<div id="popup1" class="overlay">
	<div class="popup">
		<h4><li>Exam Form submission for next semester will be starting from tomorrow.
		<li>Selection process for internal college &nbsp &nbsp &nbsp &nbsp  &nbspcompetition will be start soon.</li>
		<li>Last date of fee submission is 07-07-2021</li>
	</h4>
		<a class="close" href="#">&times;</a>
		<div class="content">
		
		</div>
	</div>
</div>
<style>
body {
  font-family: Arial, sans-serif;
  background:white;
  background-size: cover;
  height: 100vh;
}

h1 {
  text-align: center;
  font-family: Tahoma, Arial, sans-serif;
  color: #06D85F;
  margin: 80px 0;
}

.box {
  width: 40%;
  margin: 0 auto;
  background: green;
  padding: 35px;
  border: 2px solid #fff;
  border-radius: 20px/50px;
  background-clip: padding-box;
  text-align: center;
}

.button {
  font-size: 1em;
  padding: 10px;
  color: #fff;
  border: 2px solid #06D85F;
  border-radius: 20px/50px;
  text-decoration: none;
  cursor: pointer;
  transition: all 0.3s ease-out;
}
.button:hover {
  background: gold;
}

.overlay {
  position: fixed;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  background: rgba(0, 0, 0, 0.7);
  transition: opacity 500ms;
  visibility: hidden;
  opacity: 0;
}
.overlay:target {
  visibility: visible;
  opacity: 1;
}

.popup {
  margin: 70px auto;
  padding: 20px;
  background: #fff;
  border-radius: 5px;
  width: 30%;
  position: relative;
  transition: all 5s ease-in-out;
}

.popup h2 {
  margin-top: 0;
  color: #333;
  font-family: Tahoma, Arial, sans-serif;
}
.popup .close {
  position: absolute;
  top: 20px;
  right: 30px;
  transition: all 200ms;
  font-size: 30px;
  font-weight: bold;
  text-decoration: none;
  color: #333;
}
.popup .close:hover {
  color: #06D85F;
}
.popup .content {
  max-height: 30%;
  overflow: auto;
}

@media screen and (max-width: 700px){
  .box{
    width: 70%;
  }
  .popup{
    width: 70%;
  }
}
</style>
<br><br>
<style>
.hero-text button {
  border: none;
  outline:2px;
  width: 200px;
  display: inline-block;
  padding: 10px 25px;
  color: black;
  background-color: gold;
  text-align: center;
  cursor: pointer;
}

.hero-text button:hover {
  background-color:orange;
  color: white;
}
</style>
<div id="page">
	<div class="hero-text">
	<div id="con4">
		<span style="font-family:Arial;font-size: 29px;color:brown;margin-left: 60px;">Student Dashboard</span><br><br>
<center><a href="https://www.google.com"><button><b>MARKSHEETS</b></button></a>
 <a href="https://www.google.com"><button><b>DIGI LOCKER</b></button></a><br><br>
  <a href="https://www.google.com"><button><b>FEE DETAILS </b></button></a>


   <a href="https://www.google.com"><button><b>ASSIGNMENT</b></button></a><br><br>
   <a href="https://www.google.com"><button><b>MY PROJECTS </b></button></a>
   <a href="https://www.google.com"><button><b>ATTENDANCE</b></button></a> <br><br>
   <a href="https://www.google.com"><button><b>EXAM INFO</b></button></a>
   <a href="https://www.google.com"><button><b>TIME TABLE</b></button></a><br><br>
   <a href="https://www.google.com"><button><b>ADMIT CARD</b></button></a>
    <a href="https://www.google.com"><button><b>BOOKS ISSUED</b></button></a>
   


   </center>
</div>
	<center>
	
	<div id="con5">
		<span style="font-family:Arial;font-size: 29px;color:brown;">STUDENT DETAILS</span><br><br>

<br><br>
<form action = "loginform.php" method ="POST">

<?php

$con = mysqli_connect('localhost', 'root', '','studentportal');

$name = $_SESSION["Name"];


$sql = mysqli_query($con,"SELECT Name, Enrollment,Mobile,Gender,Email,Semester,Status FROM `studentdata` WHERE Name ='{$_SESSION['Name']}' ");


    $row = mysqli_fetch_assoc($sql);
    	
if($row)

 echo "Enrollment :" . $row["Enrollment"]."<hr><br>". " Name: " . $row["Name"]."<hr><br>". "Mobile :" . $row["Mobile"]."<hr><br>"."Gender :" .$row["Gender"] ."<hr><br>"."Email :" .$row["Email"] ."<hr><br>"."Status :" .$row["Status"];
    
?>

<br><br>

<a href="logout.php"  title="Logout"><input type="submit" value="Logout"></a>
</div>
</div>
<style>
 input[type=submit]{
    color:#ffffff;
    background-color: #4caf50;
    height:40px;
    width:10%;
    margin-top:15px;
    cursor: pointer;
    border:none;
    border-radius:2%;
    outline:none;
    text-align:center;
    font-size:16px;
    text-decoration:none;
    -webkit-transition-duration:0.4s;
    transition-duration:0.4s;
}
input[type=submit]:hover{
    background-color:gold;
}
</style>
</form>
</center>