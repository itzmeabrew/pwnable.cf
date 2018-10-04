<?php 

$u = $_POST['pass'];

if ($u == 'bacon') {
	setcookie("c9");
	header('location:http://pwnable.cf/crypto/complete.html');
	
}
else {
	header('location:http://pwnable.cf/crypto/7/');
}
 ?>