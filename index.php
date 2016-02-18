<!DOCTYPE html>
<html>
<head>
<title>LFI LAB</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="core/includes/style/style.css" />
</head>
<body>
<div id="main">
<div class="header">
<div class="headertext" style="opacity: 1">
<img src="core/includes/pic/logo.png">
</div>
<br><br>
</div>
<div class="welcome">Welcome</div>
<div class="clear"></div>
<div class="body">
<?php 
$auth_user = "21232f297a57a5a743894a0e4a801fc3"; //admin
$auth_pass = "21232f297a57a5a743894a0e4a801fc3"; //admin 
@session_start(); 
function Login() { 
    die(" 
	<h2>You Need To Login First</h2>
    <form method=post> 
    <label for=pass>Username: </label><input type=text name=username><br>
	<label for=pass>Password: </label><input type=password name=pass>
	<input type=submit>
    </form>
	"); 
} 
if(!isset($_SESSION[$_SERVER['HTTP_HOST']])) 
    if(empty($auth_pass) || empty($auth_user) || (isset($_POST['username']) ||  isset($_POST['pass']) ) && (md5($_POST['username']) == $auth_user) && (md5($_POST['pass']) == $auth_pass)) 
        $_SESSION[$_SERVER['HTTP_HOST']] = true; 
    else
        Login(); 
?>

<span style="font-size:13px">
In the name of Allah<br>
Welcome to Ashiyane LFI laboratory. there are 13+2 lessons for trying LFI bug. and each lesson have something special.
Also there is a "Help" button for hint and a "Source" for checking the Codes.Try to pass all lessons.<br><br>

</span>

<center>
<table>
<th>Easy</th><th>Medium</th><th>Hard</th><tr><td><a href="core/lessons/less-1/index.php">Lesson 1</a></td><td><a href="core/lessons/less-6/index.php">Lesson 6</a></td><td><a href="core/lessons/less-11/index.php?file=mh.txt">Lesson 11</a></td></tr><tr><td><a href="core/lessons/less-2/index.php">Lesson 2</a></td><td><a href="core/lessons/less-7/index.php">Lesson 7</a></td><td><a href="core/lessons/less-12/index.php">Lesson 12</a></td></tr><tr><td><a href="core/lessons/less-3/index.php">Lesson 3</a></td><td><a href="core/lessons/less-8/index.php">Lesson 8</a></td><td><a href="core/lessons/less-13/index.php?file=mh.txt">Lesson 13</a></td></tr><tr><td><a href="core/lessons/less-4/index.php">Lesson 4</a></td><td><a href="core/lessons/less-9/index.php">Lesson 9</a></td><td><a href="core/lessons/less-14/index.php">Lesson 14</a></td></tr><tr><td><a href="core/lessons/less-5/index.php">Lesson 5</a></td><td><a href="core/lessons/less-10/index.php">Lesson 10</a></td><td><a href="core/lessons/less-15/index.php">Lesson 15</a></td></tr>
</table>
</center>
</div>
<div class="aboutus"><a href="aboutus.php">About Us</a></div>
<div class="clear"></div>
<div class="footer">
<br>
<span>
Developed By: Kcaher<br>
Special Thanks To: Mahdi.Hidden - B14CK SPID3R<br>
&copy; 2015 Ashiyane Digital Security Team. All right reserved.
</span>
</div>

</div>
</body>
</html>

