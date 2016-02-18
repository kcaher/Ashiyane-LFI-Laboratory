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
<title>less-13</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="../../includes/style/style.css" />
<script src="../../includes/script/script.js"></script>
</head>
<body>
<div id="main">
<div class="header">
<div class="headertext">
THIS IS THIRTEENTH LESSON
</div>
<br><br>
</div>
<div class="next"><a href="../less-14/">Next ></a></div>
<div class="home"><a href="../../../">Home</a></div>
<div class="prev"><a href="../less-12/">< Prev</a></div>
<div class="clear"></div>
<div class="body">
<br>
At this lesson you must try to get /etc/passwd<br>
<?php 
error_reporting(0);
if(isset($_GET['file'])){

$_GET['file']=strtolower($_GET['file']);

if((strpos($_GET['file'],"etc/passwd")!==false) or (strpos($_GET['file'],"/.")!==false)){
$_REQUEST['file']="mh.txt";
}

if(
  (isset($_REQUEST['file'])) &&
  (isset($_GET['file']))  &&
  ($_GET['file'] == "mh.txt")
){
$d="../../file/".$_REQUEST['file'];
include("$d");
}
else{
echo "<br>THIS IS A HACKING ATTEMPT";
}
}
?>

</div>
<div class="help"><a href="javascript:popUp('../../help/?lesson=13')">Help</a></div>
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


</div>
</body>
</html>
