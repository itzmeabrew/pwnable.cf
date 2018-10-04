<?php 

$u = $_POST['user'];
$p = $_POST['pass'];


if ($u == 'crypto' && $p == 'hashing') {
	setcookie("c2");
	header('location:http://pwnable.cf/crypto/3/');
}
else {
	header('location:http://pwnable.cf/crypto/2/');
	# code...
}
 ?>