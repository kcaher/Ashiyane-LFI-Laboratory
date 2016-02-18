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
<title>less-15</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="../../includes/style/style.css" />
<script src="../../includes/script/script.js"></script>
</head>
<body>
<div id="main">
<div class="header">
<div class="headertext">
THIS IS FIFTEENTH LESSON
</div>
<br><br>
</div>
<div class="home" style="border-right:0px"><a href="../../../">Home</a></div>
<div class="prev"><a href="../less-14/">< Prev</a></div>
<div class="clear"></div>
<div class="body">
<br>
At this lesson you must upload shell and run it<br>
<?php 
error_reporting(0);
if(isset($_GET['file']) && !empty($_GET['file'])){

if(isset($_GET['file']) ){
$d="../../file/".$_GET['file'];
include("$d");
}
else{
echo "<br>NOT FOUND!!";
}

}else{
	header("Location: ?file=mh.txt&img=i.jpg");
}

?>

<br>
<br>
<div style="float:left">
<img src="../../includes/pic/<?php echo htmlspecialchars($_GET['img']); ?>" height="100" width="100" style="border:2px solid #3A86DD"/>
</div>
<br><br>
<div style="float:left;margin-left:20px">
<form action="" method="post" enctype="multipart/form-data" >
<input type="file" name="image" />
<input type="submit" value="upload" name="submit" />
</form>
</div>
<div class="clear"></div>
<?php

$explode=explode(".",$_FILES["image"]["name"]);
$end=end($explode);

if(isset($_FILES['image'])){
if(
($_FILES['image']['error'] == 0) &&
($_FILES['image']['size'] < 10240) &&
($end == "jpg") &&
($_FILES["image"]["type"] == "image/jpeg"  || $_FILES["image"]["type"] == "image/jpg")
)
{
move_uploaded_file($_FILES["image"]["tmp_name"],"upload/". $_FILES["image"]["name"]);
echo "<br>your file uploaded.<br>";
echo "<br>lfi/lessons/less-15/upload/".$_FILES["image"]["name"];
}else{echo "<br>try again<br>this is local file inclusion cms not RFU,...";}
}else{echo "<br>you have to upload your shell and use that.";}
?>
</div>
<div class="help"><a href="javascript:popUp('../../help/?lesson=15')">Help</a></div>
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