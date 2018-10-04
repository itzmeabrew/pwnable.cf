<?php 

$u = $_POST['pass'];

if ($u == 'pcy89tj' || $u == 'pcy89ti'  ) {
	setcookie("s2");
	header('location:http://pwnable.cf/stego/3/');
}
else {
	header('location:http://pwnable.cf/stego/2/');
	# code...
}
 ?>