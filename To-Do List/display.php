<?php
session_start();
?>

<h1>The Grand Bhagvati</h1>

<h2>Welcome Mr. <?php echo $_SESSION['user']; ?></h2>
<a href="securepage.php" title="transfer">Transfer