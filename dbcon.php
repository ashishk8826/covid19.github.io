<?php
$server='localhost';
$user='root';
$password='';
$db='coronadb';
$con=mysqli_connect($server,$user,$password,$db);
if($con){
	
	
}

else{
	?>
	<script>alert("connection failed");
</script>
	<?php
}
?>