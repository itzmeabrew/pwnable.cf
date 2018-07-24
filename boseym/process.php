<?php 

$u = $_POST['pass'];

if ($u == 'desktop') {
	header('location:../devyat/index.html');
	
}
else {
	header('location:../boseym/index.html');
}
 ?>