<?php 

$u = $_POST['pass'];

if ($u == 'ethicalhacker') {
	header('location:http://pwnable.cf/crypto/2/');
}
else {
	header('location:http://pwnable.cf/crypto/1/');
	# code...
}
 ?>