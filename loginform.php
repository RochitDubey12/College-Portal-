
<?php

$con = mysqli_connect('localhost', 'root','','studentportal');

    session_start();


if (isset($_POST['submit']))
{

$name=$_POST['Name'];

$password=$_POST['Password'];

$sql = mysqli_query($con, "SELECT * FROM  studentdata  WHERE Name='$name' && Password='$password'");


    $total=mysqli_num_rows($sql);


if ($total == 1)

{
     $_SESSION["Name"]="$name";
    header("Refresh:2;url=loginname.php");


}

else
{

    echo "Login Failed";
}

}

?>
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




<!DOCTYPE html>
<html>
<head>

    <title>Dropdown Menu</title>
</head>
<body>
    <nav>
        <ul>
             <li><a href="studentportal.html">Home</a></li>
      <li><a href="aboutus.html">About</a></li>
      <li><a href="#">Student Corner</a>
                <ul class="ul-2">
                    <li><a href="loginform.php">Login</a></li>
                    <li><a href="registrationform.html">Registration</a></li>
                    <li><a href="#">Exam Info</a></li>
            
                </ul>
                 </li>
            <li><a href="">Admission</a>
            <ul class="ul-3">
                    <li><a href="admissionform.html">Admission Form</a></li>
                    <li><a href="#">Education Loan</a></li>
                    
                </ul>
                 </li>
             </li>
            
             </li>
            <li><a href="contact.html">Contact</a></li>
                <li><a href="">Institute</a>
            <ul class="ul-3">
                    <li><a href="adninlogin.php">Login</a></li>
                    
                </ul>
                 </li>
             </li>
            
             </li>
    </nav>

<style>

*,html{
    box-sizing: border-box;
}


body{
    margin: 0;
    padding: 0;
    background: white;
    font-family: 'Poppins',sans-serif;
    font-size: 20px;
}

nav{
    position: relative;
    display: flex;
    justify-content: center;
    align-items: center;
    background: white;
}

nav ul{
    margin: 0;
    padding: 0; 
    position: relative;
    display: flex;
}

nav ul li{
    list-style: none;
    position: relative;
    background: white;
    color:black;
    margin:1px;
    border-radius: 4px;
    }

nav ul li a{
    text-decoration: none;
    text-transform: uppercase;
    font-weight: 600;
    padding: 30px 33px;
    color:green;
    display: block;
    transition: 0.5s;
    
}

nav ul li a:hover{
    color: orange;



}


nav ul li:hover a:before{
    transform: rotate(405deg);
    border-color: white;

}


nav ul li ul{
    display: block;
    color:black;
    width:250px;
    position:absolute;
    margin-top:1px;
    font-size: 15px;
    transition: 0.5s;
    opacity: 0;
    visibility: hidden;
    transform: translateY(70px);
     z-index: 100;
}


nav ul li ul li a{
    padding: 18px;
    text-align:left;
    background-color: white;
     z-index: 100;
    }

nav ul li ul li{
   margin:1px;
   border-radius: 4px;
}


nav ul li:hover ul{
    opacity: 1;
    visibility: visible;
    transform:  translateY(0);
}


li:hover .ul-2 li:nth-child(1){
    animation-name: menu1;
    animation-duration: 0.4s;
    animation-timing-function:ease-in-out;
    
}


li:hover .ul-2 li:nth-child(2){
    animation-name: menu2;
    animation-duration: 0.4s;
    animation-timing-function:ease-in-out;
    
}


li:hover .ul-2 li:nth-child(3){
    animation-name: menu1;
    animation-duration: 0.4s;
    animation-timing-function:ease-in-out;
}


li:hover .ul-2 li:nth-child(4){
    animation-name: menu2;
    animation-duration: 0.4s;
    animation-timing-function:ease-in-out;
    
}

@keyframes menu1{
    0%{
        opacity:0;
    transform: translateX(100px);
    }

    100%{
        opacity: 1;
        transform: translateX(0px);
    }
}


@keyframes menu2{
    0%{
        opacity:0;
    transform: translateX(-100px);
    }

    100%{
        opacity: 1;
        transform: translateX(0px);
    }
}



li:hover .ul-3 li:nth-child(1){
    animation-name: menu3;
    animation-duration: 0.2s;
    animation-timing-function:ease-in-out;
    
}


li:hover .ul-3 li:nth-child(2){
    animation-name: menu3;
    animation-duration: 0.4s;
    animation-timing-function:ease-in-out;
    
}


li:hover .ul-3 li:nth-child(3){
    animation-name: menu3;
    animation-duration: 0.6s;
    animation-timing-function:ease-in-out;
}


li:hover .ul-3 li:nth-child(4){
    animation-name: menu3;
    animation-duration: 0.8s;
    animation-timing-function:ease-in-out;
    
}

@keyframes menu3{
    0%{
        opacity:0;
    transform: scaleX(2);
    }

    100%{
        opacity: 1;
        transform: scaleX(1);
    }
}


li:hover .ul-4 li:nth-child(1){
    animation-name: menu4;
    animation-duration: 0.2s;
    animation-timing-function:ease-in-out;
    
}


li:hover .ul-4 li:nth-child(2){
    animation-name: menu4;
    animation-duration: 0.4s;
    animation-timing-function:ease-in-out;
    
}


li:hover .ul-4 li:nth-child(3){
    animation-name: menu4;
    animation-duration: 0.6s;
    animation-timing-function:ease-in-out;
}


li:hover .ul-4 li:nth-child(4){
    animation-name: menu4;
    animation-duration: 0.8s;
    animation-timing-function:ease-in-out;
    
}

@keyframes menu4{
    0%{
        opacity:0;
    transform: rotateY(100deg) translateX(-325px);
    }

    100%{
        opacity: 1;
        transform:  rotateY(0deg) translateY(0);
    }
}


</style>


</body>
<html>

    <head>
        <meta charset="UTF-8">
        <meta name="author" content="Michele Bitetto @mic_codes">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">

        <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="style.css">

    <body>
        <div id="page">
        <div>
            <form action = "" method="POST">
            <div class="loginForm">
                <div class="formHead">
                    <div class="logo">Peace</div>
                </div>
                <div class="formBody">
                    <div>
                        <div class="formInput">
                            <div>Username</div>
                            <input type="text" name="Name" maxlength="35">
                        </div>
                        <div class="formInput">
                            <div>Password</div>
                            <input type="password" name="Password" maxlength="30">
                        </div>
                        
                    </div>
                <head>
<html>
<head>
    <title>Login</title>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.2/jquery-ui.min.js">
        </script>
</head>
<body>
    
                            <center><a href="loginname.php"><input type="submit" name="submit" value="submit"></a></center>

</body>
<script>
    $(document).ready(function() {
        function disableBack() { window.history.forward() }

        window.onload = disableBack();
        window.onpageshow = function(evt) { if (evt.persisted) disableBack() }
    });
</script>
</html>
                    <div class="forgotPass">
                       <center> <a href="#">Forgot password?</a></center>
                    </div>

                </div>
            </div>
        </div>
    </div>
    </form>
    </body>

</html>



 <style>
 html, body {
        height: 100%;
        width: 100%;
        margin: 0;
        background: #f2306a;
        background: -moz-linear-gradient(left, #f2306a 0%, #6d00a0 100%);
        background: -webkit-linear-gradient(left, #f2306a 0%, #6d00a0 100%);
        background: linear-gradient(to right, #f2306a 0%, #6d00a0 100%);
        filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#f2306a', endColorstr='#6d00a0', GradientType=1);
    }

    a {
        color: white;
        text-decoration: none;
    }

    a:visited {
        color: green;
        outline:0;
    }

    button:focus {
        outline:0;
    }

    input:focus {
        outline:0;
    }

    .loginForm {
        position: absolute;
        height: 450px;
        width: 350px;
        left: 50%;
        top: 70%;
        transform: translate(-50%, -50%);
        background-color: #050023;
        color: white;
        border-radius: 10px;
        font-family: 'Lato', sans-serif;
        font-weight: bold;
        box-shadow: 0px 7px 23px #ffffff7a
    }

    .formHead {
        height: 30%;
        width: 40%;
        text-align: center;
        background: #ff0067;
        margin: -58px 0 14% 30%;        
        border-radius: 100%;
    }

    .logo {
        padding-top: 34%;
        font-size: 30px;
    }
    
    .logo span {
        color: #050023;
        font-size: 32px;
    }

    .formBody {

    }

    .formInput {
        margin: 5%;
    }

    .formInput div {
        margin-bottom: 8px;
        text-align: center;
        color: white;
    }

    .formInput input {
        position: relative;
        height: 35px;
        width: 90%;
        padding: 0 5%;
        background: #050023;
        color: white;
        font-size: 15px;
        font-weight: bold;
        border-radius: 4px;
        border: 2px solid #ff0067;
    }

    .formInput input:focus {
        border: 2px solid #007ACC;
    }

    .rememberMe {
        margin: 8% 5%;
    }

    .loginButton {
        margin-top: 12%;
        text-align: center;
    }

    .loginButton button {
        padding: 12px 70px;
        background-color: #ff0067;
        color: white;
        border: 0;
        border-radius: 5px;
        font-weight: bold;
        text-transform: uppercase;
        cursor: pointer;
    }

    .forgotPass {
        margin-top: 4%;
        text-align: center;
        font-size: 13px;
        font-weight: bold;
    }

    input[type="checkbox"] {
        display: none;
    }
    input[type="checkbox"]+label:before {
        display: inline-block;
        height: 15px;
        width: 15px;
        margin: 0 2% 0 0;
        border: 2px solid #ff0067;
        border-radius: 4px;
        cursor: pointer;
        vertical-align: middle;
        content: "\00a0";
    }

    input[type="checkbox"]:checked+label:before {
        background: #ff0067;
        color: #050023;
        font-size: 12px;
        text-align: center;
        content: "\2713";
    }
     
     input[type=submit]{
    color:#ffffff;
    background-color: #4caf50;
    height:40px;
    width:25%;
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
    input[type="checkbox"]:checked+label:after {
        font-weight: bold;
    }

    @media (max-width: 480px) {
        .loginForm {
            height: 400px;
            width: 300px;
            top: 54%;
        }
        .formHead {
            height: 28%;
        }
        .logo {
            padding-top: 30%;
        }
        .loginButton {
            margin-top: 0%;
        }
    }
</style>

