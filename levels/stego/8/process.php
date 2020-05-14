<?php 

$u = $_POST['pass'];

if ($u == 'easystego') {
	setcookie("s8");
	header('location:http://pwnable.cf/stego/9/');
}
else {
	header('location:http://pwnable.cf/stego/8/');
	# code...
}
 ?>