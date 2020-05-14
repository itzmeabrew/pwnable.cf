<?php 

$u = $_POST['pass'];

if ($u == 'ndoubnsmd') {
	setcookie("s6");
	header('location:http://pwnable.cf/stego/7/');
}
else {
	header('location:http://pwnable.cf/stego/6/');
	# code...
}
 ?>