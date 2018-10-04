<?php 

$u = $_POST['pass'];

if ($u == 'thatwaseasy') {
	setcookie("c7");
	header('location:http://pwnable.cf/crypto/complete.html');
	
}
else {
	header('location:http://pwnable.cf/crypto/7/');
}
 ?>