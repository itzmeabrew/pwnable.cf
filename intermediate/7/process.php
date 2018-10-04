<?php 

$u = $_POST['pass'];



if ($u == 'ee402c5' ) {
	setcookie("i7");
	header('location:http://pwnable.cf/intermediate/complete.html');
}
else {
	header('location:http://pwnable.cf/intermediate/7/');
	# code...
}
 ?>