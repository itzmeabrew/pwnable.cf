<?php 

$u = $_POST['pass'];



if ($u == '3') {
	setcookie("b10");
	header('location:http://pwnable.cf/basic/complete.html');
}
else {
	header('location:http://pwnable.cf/basic/10/');
	# code...
}
 ?>