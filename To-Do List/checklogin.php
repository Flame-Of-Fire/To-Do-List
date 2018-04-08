<?php
session_start();
$msg = '';
$user = $_POST['uname'];
$pssw = $_POST['psw'];
if(isset($user) && isset($pssw)){
	if(!empty($user) && !empty($pssw)){
		require("connect.php");
		$sql = "select * from myphp.user_detail where user='$user' and password='$pssw'";
		$result = mysqli_query($conn, $sql);
		if(mysqli_num_rows($result) > 0){
			//while($row = mysqli_fetch_assoc($result)){
				$row = mysqli_fetch_assoc($result);
				if($user == $row['user'] && $pssw == $row['password']){
					$_SESSION['uname'] = $user;
					$_SESSION['psw'] = $pssw;
				}
			//}
		}
		else{
			echo 'Your UserName or Password is wrong!!'.'<br><br>'.'Please Enter right Information';
		}
	}
	else{
		echo 'Please Enter UserName and Password';
	}
}
if(isset($_SESSION['uname'])){
	header("location: index.php");
}


	
?>