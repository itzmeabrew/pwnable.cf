<?php 

$u = $_POST['pass'];

if ($u == 'pcy89tj' || $u == 'pcy89ti'  ) {
	header('location:http://pwnable.cf/stego/complete.html');
}
else {
	header('location:http://pwnable.cf/stego/2/');
	# code...
}
 ?>