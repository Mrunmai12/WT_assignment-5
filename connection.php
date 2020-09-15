

<?php

$username = "root";
$password ="";
$server= 'localhost';
$db='WT_momo';

$con = mysqli_connect($server,$username,$password,$db);

if ($con) {
	# code...
	//echo "connection successful";
	?>
	<script>
		alert('connection successful')
	</script>
	<?php 
}
else{
	echo "NO connection";
	#die("no connection".mysqli_connect_error());
}

?>