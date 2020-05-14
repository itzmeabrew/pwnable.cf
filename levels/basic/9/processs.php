<?php 

$u = $_POST['pass'];

if ($u == 'nikolatesla') {
	setcookie("b9");
	header('location:http://pwnable.cf/basic/10/');
	
}
else {
	header('location:http://pwnable.cf/basic/9/');
	# code...
}
 ?>