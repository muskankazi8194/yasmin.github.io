<?php
$conn=mysqli_connect('localhost:3306','root','','banking_syatem');
if($conn)
{
	echo "connect";
}
else
{
	die(mysqli_error($conn));
}

?>