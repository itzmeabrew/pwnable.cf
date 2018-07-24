<?php 

$u = $_POST['pass'];

if ($u == 'hackerethical') {
	header('location:../seym/index.html');
}
else {
	header('location:../shest/index.html');
	# code...
}
 ?>