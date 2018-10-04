<?php 

$u = $_POST['pass'];

if ($u == '') {
	setcookie("b2");
	header('location:http://pwnable.cf/basic/3/');
	
}
else {
	header('location:http://pwnable.cf/basic/2/');
	# code...
}
 ?>