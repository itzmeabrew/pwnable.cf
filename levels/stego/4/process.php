<?php 

$u = $_POST['pass'];

if ($u == '2f458y') {
	setcookie("s4");
	header('location:http://pwnable.cf/stego/5/');
}
else {
	header('location:http://pwnable.cf/stego/4/');
	# code...
}
 ?>