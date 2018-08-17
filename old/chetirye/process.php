<?php 

$u = $_POST['user'];
$p = $_POST['pass'];


if ($u == 'paint' && $p == 'rules') {
	header('location:../pyat/index.html');
}
else {
	header('location:../chetirye/index.html');
	# code...
}
 ?>