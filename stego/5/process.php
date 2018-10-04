<?php 

$u = $_POST['pass'];

if ($u == 'lmdtadddttueeema') {
	setcookie("s5");
	header('location:http://pwnable.cf/stego/6/');
}
else {
	header('location:http://pwnable.cf/stego/5/');
	# code...
}
 ?>