<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>
	<script src="jquery-3.1.1.js"></script>
    <link href="todo.css" rel="stylesheet" type="text/css">
</head>
<body>
    <div class="cname">
        <h1>TO-DO List</h1>
        <!--<span><//?php if(isset($_SESSION['uname'])){echo $_SESSION['uname'];} ?> <a href="logout.php">Logout</a></span>-->
    </div>
	<div class="loginBtn">
			<?php if(isset($_SESSION['uname'])){
				echo "<div class=loginBtn><a href=logout.php>$_SESSION[uname]</a></div>";
			}
				else{
					echo "<div class=loginBtn><a href=login.php>Login</a></div>";
				}?>
			<!--<a href="login.php">Login</a>-->
	</div>
        <div id="con" class="container">
            <div class="Header">
                <h3>Enter List</h3>
                <input type="text" name="addNote" id="input" placeholder="Title.......">
                <span class="add-btn" onclick="loadDoc()">Add</span>
            </div>
            <ul id="myUL">
				<?php
				if(isset($_SESSION['uname'])){
					require("connect.php");
					$user = $_SESSION['uname'];
					$sql = "select * from myphp.notes where user='$user'";
					$result = mysqli_query($conn, $sql);

					if(mysqli_num_rows($result) > 0){
						while($row = mysqli_fetch_assoc($result)){
							$note = $row['note'];
			$id = $row['id'];
							//echo "<li>{$row['note']}<span {$row['id']} class=close onclick=closeTab();>&times;</span></li>";
							echo '<li>'.$note.'<span id="'.$id.'" class="close" onclick="closeTab()">&times;</span></li>';
						}
					}
				}	
				?>
            </ul>
        </div>
	<div class="footer">
        <p>copyright&copy; by Shyam Padodara</p>
    </div>
<script>

function loadDoc() {
	var detail = document.getElementById('input').value;
	var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
			$("#myUL").html(this.responseText);
			//document.getElementById("myUL").innerHTML =
			//this.responseText;
		}
	};
	xhttp.open("GET", "note.php?addNote="+detail, true);
	xhttp.send();
	$("#input").val('');
}

  var list = document.querySelector('ul');
list.addEventListener('click', function(ev) {
    if (ev.target.tagName === 'LI') {
        ev.target.classList.toggle('checked');
    }
}, false);

function closeTab(){
	var close = document.getElementsByClassName("close");
    for (i = 0; i < close.length; i++) {
        close[i].onclick = function() {
			var current_element = $(this);

				var id = $(this).attr('id');

				$.post('delete.php', { task_id: id }, function() {

					current_element.parent().fadeOut("fast", function() { $(this).remove(); });
				});
            /*var div = this.parentElement;
			$div = $(div);
			$div.css("display","none");*/
            //div.style.display = "none";
        }
    }
}

</script>
</body>
</html>