<?php 

$u = $_POST['pass'];

if ($u == 'ohfuck') {
	setcookie("s7");
	header('location:http://pwnable.cf/stego/8/');
}
else {
	header('location:http://pwnable.cf/stego/7/');
	# code...
}
 ?>