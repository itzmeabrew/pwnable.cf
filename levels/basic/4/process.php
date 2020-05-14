<?php 

$u = $_POST['user'];
$p = $_POST['pass'];


if ($u == 'paint' && $p == 'rules') {
	setcookie("b4");
	header('location:http://pwnable.cf/basic/5/');

}
else {
	header('location:http://pwnable.cf/basic/6/');
	# code...
}
 ?>