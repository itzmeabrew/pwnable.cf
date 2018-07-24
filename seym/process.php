<?php 

$u = $_POST['pass'];

if ($u == 'cicada') {
	header('location:../boseym/index.html');
}
else {
	header('location:../seym/index.html');
	# code...
}
 ?>