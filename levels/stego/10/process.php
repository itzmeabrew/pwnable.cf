<?php 

$u = $_POST['pass'];

if ($u == '31415926') {
	setcookie("s10");
	header('location:http://pwnable.cf/stego/complete.html');
}
else {
	header('location:http://pwnable.cf/stego/10/');
	# code...
}
 ?>