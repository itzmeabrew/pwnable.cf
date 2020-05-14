<?php 

$u = $_POST['pass'];

if ($u == 'thiswaseasy') {
	setcookie("c5");
	header('location:http://pwnable.cf/crypto/6/');
	
}
else {
	header('location:http://pwnable.cf/crypto/5/');
}
 ?>