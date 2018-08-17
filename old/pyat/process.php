<?php 

$u = $_POST['user'];
$p = $_POST['pass'];


if ($u == 'faded' && $p == 'decaf') {
	header('location:../shest/index.html');
}
else {
	header('location:../pyat/index.html');
	# code...
}
 ?>