<?php
echo "welcome,".$_POST['id'].",login success!";
echo "<br/><a href='login.php'>Back to login</a>";
if (!empty($_COOKIE['lastVist'])) {
	echo "your last login time :".$_COOKIE['lastVist'];
	setcookie('lastVist',time(),time()+3600*24*30);
}else{
	echo "This is your first login";
	setcookie('lastVist',time(),time()+3600*24*30);
}