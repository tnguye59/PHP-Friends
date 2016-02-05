<html>
<head>
	<title><?= $users['alias']?></title>
			 <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/css/materialize.min.css">

  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js"></script>
</head>
<body>

<nav>
    <div class="nav-wrapper">
      <a href="#" class="brand-logo">Looking for Friends?</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="/Uusers/logout">Log Out</a></li>
        <li><a href="/users/profile">Home</a></li>
      </ul>
    </div>
</nav>
<h2><?= $users['alias']?> Profile</h2>
<p>Name: <?= $users['name']?></p>
<p>Email: Address <?= $users['email']?></p>
</body>
</html>