<?php 

$u = $_POST['pass'];

if ($u == '' || $u != '') {
	header('location:../tri/index.html');
}
else {
	header('location:../dva/index.html');
	# code...
}
 ?>