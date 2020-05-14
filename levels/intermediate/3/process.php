<?php 

$u = $_POST['score'];

if ($u == '17294104' ) {
	setcookie("i3");
	header('location:http://pwnable.cf/intermediate/4/');
}
else {
	header('location:http://pwnable.cf/intermediate/3/');
	# code...
}
 ?>