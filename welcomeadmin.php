<html>
<head>
    <link rel ="stylesheet" type="text/css" href="cssforforms.css">
   
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

</head>
<center>
	<br><br><br><br><br>
<?php
session_start();

echo "<b>Welcome".' ' .$_SESSION["Name"]; 
?>
<br><br>
<style>
ul
{
	width:30%;
	list-style:none;
	margin:0;
	padding:0;
	overflow:hidden;
	background-color:rgba(162, 202, 202, 0.7);
}

li
{
	float:left;
}


li a
{

	display:block;
	color:black;
	padding:40px 42px;
	text-decoration:none;
}

li a:hover:not(.active)
{
	background-color:green;
}
.active
{
	background-color:#DAA520;
}


{
</style>
</head>
<style>
.container {
  position: absolute;
  text-align: center;
  color: black;
  font-family:impact;

}

.centered {
  position: absolute;
  top: 15%;
  left: 40%;

</style>
<center>
<ul>
<li><a class="#" href="datagrid.php">View</a></li>
<li><a class="#" href="update.html">Update</a></li>
<li><a class="#" href="deletedata.html">Delete</a></li>

</ul>
</center>
<br><br>

<a href="adminlogout.php"  title="Logout"><input type="submit" value="Logout"></a>
</center>
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
