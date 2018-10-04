<?php 

$u = $_POST['pass'];

if ($u == 'cicada') {
	setcookie("c3");
	header('location:http://pwnable.cf/crypto/4/');
}
else {
	header('location:http://pwnable.cf/crypto/3/');
	# code...
}
 ?>