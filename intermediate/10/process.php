<?php 

$u = $_POST['pass'];

if ($u == 'youareagenius' ) {
	setcookie("i10");
	header('location:http://pwnable.cf/intermediate/complete.html');
}
else {
	header('location:http://pwnable.cf/intermediate/10/');
	# code...
}
 ?>