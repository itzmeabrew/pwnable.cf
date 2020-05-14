<?php 

$u = $_POST['pass'];

if ($u == '554c75ct' ) {
	setcookie("i1");
	header('location:http://pwnable.cf/intermediate/2/');
}
else {
	header('location:http://pwnable.cf/intermediate/1/');
	# code...
}
 ?>