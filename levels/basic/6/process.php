<?php 

$u = $_POST['user'];
$p = $_POST['pass'];


if ($u == 'resu' && $p == 'ssap') {
	setcookie("b6");
	header('location:http://pwnable.cf/basic/7/');
}
else {
	header('location:http://pwnable.cf/basic/6/');
	# code...
}
 ?>