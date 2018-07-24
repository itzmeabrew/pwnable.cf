<?php 

$u = $_POST['pass'];

if ($u == 'pcy89tj' || $u == 'pcy89ti'  ) {
	header('location:../desyat/thankyou.html');
}
else {
	header('location:../desyat/index.html');
	# code...
}
 ?>