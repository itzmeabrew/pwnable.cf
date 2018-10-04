<?php 

$u = $_POST['pass'];

if ($u == '3xcv4a') {
	setcookie("b1");
	header('location:http://pwnable.cf/basic/2/');
	
}
else {
	header('location:http://pwnable.cf/basic/1/');
	# code...
}
 ?>