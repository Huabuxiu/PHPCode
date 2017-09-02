<?php
if ($con=mysqli_connect('localhost','root','1234567')){
	echo "成功";
}else{
	echo "失败";
}
if (mysqli_select_db($con,"test")) {
	echo "string\n";
}else{
	echo "失败";
}
// $sql = 'INSERT INTO `test` (`id`, `name`) VALUES ("4", "梨子")';
// if(mysqli_query($con,$sql))
// {
// 	echo "插入成功\n";
// }else{
// 	echo mysqli_error($con);
// 	echo "插入失败\n";
// }
$sql1='SELECT * FROM `test`';
$f=mysqli_query($con,$sql1);
echo mysqli_result($f,1);