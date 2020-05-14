<?php 

$u = $_POST['pass'];

if ($u == 'mdawmde0' ) {
	setcookie("i5");
	header('location:http://pwnable.cf/intermediate/6/');
}
else {
	header('location:http://pwnable.cf/intermediate/5/');
	# code...
}
 ?>