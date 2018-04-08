<!--<style>
input{
    width:75%;
    border: none;
    padding: 10px;
    float: left;
    font-size: 16px;
}

ul{
    margin: 0;
    padding: 0;
}
ul li{
    cursor: pointer;
    position: relative;
    padding: 12px 8px 12px 40px;
    background: #eee;
    font-size: 18px;
    transition: 0.2s;
    -webkit-user-select : none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
}
ul li:nth-child(odd){
    background: #f9f9f9;
}
ul li:hover{
    background: #ddd;
}
ul li.checked{
    background: #888;
    color: #fff;
    text-decoration: line-through;
}
ul li.checked::before{
    content: '';
    position: absolute;
    border-color: #fff;
    border-width: 0 2px 2px 0;
    top: 10px;
    left: 16px;
    transform: rotate(45deg);
    border-style: solid;
    height: 15px;
    width: 7px;
}

.close{
    position: absolute;
    right: 0;
    top:0;
    padding: 12px 16px 12px 16px;
}
.close:hover{
    background-color: #f44336;
    color: white;
}
</style>-->
<?php
session_start();
require("connect.php");
if(isset($_SESSION['uname'])){
	$user = $_SESSION['uname'];
	$detail = $_GET['addNote'];
	if(!empty($detail)){
		$sqln = "insert into myphp.notes(user,note) values('$user','$detail')";
		mysqli_query($conn, $sqln);
	}
	$sql = "select * from myphp.notes where user='$user'";
	$result = mysqli_query($conn, $sql);

	if(mysqli_num_rows($result) > 0){
		while($row = mysqli_fetch_assoc($result)){
			$note = $row['note'];
			$id = $row['id'];
			//echo "<li>{$row['note']}<span id={$row['id']} class=close onclick=closeTab();>&times;</span></li>";
			echo '<li>'.$note.'<span id="'.$id.'" class="close" onclick="closeTab()">&times;</span></li>';
		}
	}
	else{
		echo '0 result'.' '.$detail.' '.$user;
	}
}
else{
	echo "Please Login";
}
?>