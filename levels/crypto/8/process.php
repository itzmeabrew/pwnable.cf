<?php 

$u = $_POST['pass'];

if ($u == 'wasthiseasy') {
	setcookie("c8");
	header('location:http://pwnable.cf/crypto/complete.html');
	
}
else {
	header('location:http://pwnable.cf/crypto/7/');
}
 ?>