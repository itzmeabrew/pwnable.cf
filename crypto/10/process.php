<?php 

$u = $_POST['pass'];

if ($u == 'srinivasaramanuja') {
	setcookie("c10");
	header('location:http://pwnable.cf/crypto/complete.html');
	
}
else {
	header('location:http://pwnable.cf/crypto/10/');
}
 ?>