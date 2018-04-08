<?php
/*$host = 'localhost:3306';
$user = 'root';
$pss = '12345';
$conn = mysqli_connect($host, $user, $pss);

if(! $conn )  
{  
  die('Could not connect: ' . mysqli_error());  
}  
echo 'Connected successfully<br>';
$sal = 200000;
$id = 2;
$sql = "select * from myphp.emp";
$ret = mysqli_query($conn, $sql);  

if(mysqli_num_rows($ret) > 0){
while($row = mysqli_fetch_assoc($ret)){
	echo "EMP ID: {$row['id']} "."EMP NAME: {$row['name']} "."EMP SALARY: {$row['salary']}<br>";
}
}
else{
	echo '0 result';
}

mysqli_close($conn);*/
$ab = 4;
if($ab == 3){
	echo "hi";
}
else{
	echo "<script>alert('perfect')</script>";
}
?>
