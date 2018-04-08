<!DOCTYPE HTML>
<html>
<style>
body{
    margin: 0;
    font-family: "Calibri";
}
*{
	box-sizing: border-box;
}
.log-container{
	width: 500px;
	margin: 100px auto 0 auto;
	border: 1px solid;
	padding: 0;
}
.log-sign{
	width: 100%;
	font-size: 20px;
}
.form-div{
	float: none;
	padding: 10px;
	width: 100%;
	margin-top: 5px;
}
input{
	width: 100%;
	padding: 10px;
	margin: 10px 0;
}
label{
	margin-top: 5px;
	font-size:20px;
}
#login, #signup{
	float: left;
	width: 50%;
	margin: 0;
	text-align: center;
	padding:5px;
	border-bottom: 1px solid orange;
	
}
#login span, #signup span{
	font-size: 30px;
}
#signup{
	border-left: 1px solid;
	opacity: 0.4;
}
input[type=submit]{
	border: 0;
}
</style>
<body>

<div class="log-container">
	<div class="log-sign">
		<div id="login">
			<span>Login</span>
		</div>
		<div id="signup">
			<span>Singup</span>
		</div>
	</div>
	<div class="form-div">
		<form action="checklogin.php" method="POST">
			<label>User Name:</label>
			<input type="text" name="uname" autofocus/>
			<label>Password:</label>
			<input type="password" name="psw"/>
			<input type="submit" value="login"/>
		</form>
	</div>
</div>

</body>
</html>