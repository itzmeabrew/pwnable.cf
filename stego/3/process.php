<?php 

$u = $_POST['pass'];

if ($u == 'isthisstego') {
	setcookie("s3");
	header('location:http://pwnable.cf/stego/4/');
}
else {
	header('location:http://pwnable.cf/stego/3/');
	# code...
}
 ?>