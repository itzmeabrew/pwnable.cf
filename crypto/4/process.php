<?php 

$u = $_POST['pass'];

if ($u == 'desktop') {
	setcookie("c4");
	header('location:http://pwnable.cf/crypto/5/');
	
}
else {
	header('location:http://pwnable.cf/crypto/4/');
}
 ?>