<?php 

$u = $_POST['pass'];



if ($u == 'stephenhawking' ) 
{	setcookie("i9");
	header('location:http://pwnable.cf/intermediate/10/');
}
else{
	header('location:http://pwnable.cf/intermediate/9/');
}
	# code...
 ?>