<?php
session_start();
?>
<h1>Profile</h1>

<?php
if($_SESSION['uname']){
?>
welcome <?php echo $_SESSION['uname']; ?>. Click here to <a href="logout.php" title="logout">Logout.
<?php
}
?>