<html>
<head>
	<title>Login/Registration</title>
	<style type="text/css">
	#login
	{
		border: 1px solid black;
		width: 500px;
		height: 350px;
		padding-left: 30px;
    	padding-top: 20px;
    	box-shadow: 10px 10px 5px #888888;
    	margin-bottom: 50px;
	}
	#register
	{
		border: 1px solid black;
		width: 500px;
		height: 700px;
		padding-left: 30px;
    	padding-top: 20px;
    	box-shadow: 10px 10px 5px #888888;
    	margin-right: 30px;
	}
	#register, #login
	{
		display: inline-block;
		vertical-align: top;
	}
	.brand-logo{
		margin-left: 10px;
	}
	</style>

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/css/materialize.min.css">

</head>
<body>

	<nav>
    <div class="nav-wrapper">
      <a href="#" class="brand-logo">Looking for Friends?</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
      </ul>
    </div>
</nav>
<div class="row">
	<h2>Welcome!</h2>
 <?= $this->session->flashdata("register_error"); ?>
 <fieldset id="register">
	<legend><h2>Register</h2></legend>
	<form action="/users/register_user" method="post">
		<p><label>Name:</label>
		<input type="text" name="name"></p>
		<p><label>Alias:</label>
		<input type="text" name="alias"></p>
		<p><label>Email:</label>
		<input type="text" name="email"></p>
		<p><label>Password:</label>
		<input type="password" name="password"></p>
		<p><label>Confirm Password:</label>
		<input type="password" name="r_password"></p>
		<p><label>Date of Birth</label>
		<input type="date" name="birthday"></p>
		<input type="submit" value="Register" class="btn blue">
	</form>
</fieldset>


<fieldset id="login">
	<legend><h2>Log in</h2></legend>
	<?= $this->session->flashdata("login_error"); ?>
	<form  action="/Users/login" method="post">
		<p><label>Email:</label>
		<input type="text" name="login_email" placeholder="Email"></p>
		<p><label>Password:</label>
		<input type="password" name="login_password" placeholder="Password"></p>
		<input type="submit" value="Login" class="btn blue">
	</form>
</fieldset>
</div>
</body>
</html>