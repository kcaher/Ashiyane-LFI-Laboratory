<?php

require_once("../../includes/functions/functions.php");
checklogin();
if (isset($_GET['viewsource'])){
		highlight_file(__FILE__);
		exit(1);
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Lesson 1</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="../../includes/style/style.css" />
<script src="../../includes/script/script.js"></script>
</head>
<body>
<div id="main">
<div class="header">
<div class="headertext">
THIS IS FIRST LESSON
</div>
<br><br>
</div>
<div class="next"><a href="../less-2/">Next ></a></div>
<div class="home" style="border-left:0px"><a href="../../../">Home</a></div>
<div class="clear"></div>
<div class="body">
<br>
<?php
error_reporting(7);
?>
<?php
if(isset($_GET['file']) && !empty($_GET['file'])){
$file="../../file/".$_GET['file'];
include("$file");
?>
<?php
} else{
	header("Location: ?file=mh.txt");
}
?>
</div>
<div class="help"><a href="javascript:popUp('../../help/?lesson=1')">Help</a></div>
<div class="source"><a href="javascript:popUp('index.php?viewsource')">Source</a></div>
<div class="clear"></div>
<div class="footer">
<br>
<span>
Developed By: Kcaher<br>
Special Thanks To: Mahdi.Hidden - B14CK SPID3R<br>
&copy; 2015 Ashiyane Digital Security Team. All right reserved.
</span>
</div>
</p>
</html>
