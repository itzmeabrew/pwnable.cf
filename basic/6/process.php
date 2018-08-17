<?php 

$u = $_POST['user'];
$p = $_POST['pass'];


if ($u == 'resu' && $p == 'ssap') {
	header('location:http://pwnable.cf/basic/complete.html');
}
else {
	header('location:http://pwnable.cf/basic/6/');
	# code...
}
 ?>