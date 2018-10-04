<?php 

$u = $_POST['pass'];

if ($u == 'sv5roui2') {
	setcookie("b3");
	header('location:http://pwnable.cf/basic/4/');
	
}
else {
	header('location:http://pwnable.cf/basic/3/');
	# code...
}
 ?>