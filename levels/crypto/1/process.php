<?php 

$u = $_POST['pass'];

if ($u == 'ethicalhacker') {
	setcookie("c1");
	header('location:http://pwnable.cf/crypto/2/');
}
else {
	header('location:http://pwnable.cf/crypto/1/');
	# code...
}
 ?>