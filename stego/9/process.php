<?php 

$u = $_POST['pass'];

if ($u == '74534884') {
	setcookie("s9");
	header('location:http://pwnable.cf/stego/10/');
}
else {
	header('location:http://pwnable.cf/stego/9/');
	# code...
}
 ?>