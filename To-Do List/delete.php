<?php
$task_id = $_POST['task_id'];

	require("connect.php");

	mysqli_query($conn, "DELETE FROM myphp.notes WHERE id='$task_id'");
?>