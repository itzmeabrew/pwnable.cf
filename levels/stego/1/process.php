<?php 

$u = $_POST['pass'];

if ($u == 'v4t7yiu0' || $u == 'v4t7yiuO' ) {
	setcookie("s1");
	header('location:http://pwnable.cf/stego/2/');
}
else {
	header('location:http://pwnable.cf/stego/1/');
	# code...
}
 ?>