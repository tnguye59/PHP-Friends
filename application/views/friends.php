<html>
<head>
	<title>Friends</title>
	 <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/css/materialize.min.css">

  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js"></script>
  <style type="text/css">
  .brand-logo {
  	margin-left: 10px;
  }
  </style>
</head>
<body>

<nav>
    <div class="nav-wrapper">
      <a href="#" class="brand-logo">Looking for Friends?</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="/Users/logout">Log Out</a></li>
      </ul>
    </div>
</nav>
		
<div class="row">
 <div class="col s6">
	<table class="bordered">
	<h2>Welcome <?= $this->session->userdata['user_name']; ?>!</h2>
	<h5>Here is the list of your friends:</h5>
		<thead>
			<th>Alias</th>
			<th rowspan ="2">Action</th>
		</thead>
	<?php
		foreach($friends as $friend)
		{
	?>
		<tbody>
			<td><?= $friend['friend_alias']?></td>
			<td>
				<a class="btn blue" href="/Users/getFriendInfo/<?= $friend['friend_id']?>">View Profile</a>
			</td>
			<td>
				<a class="btn red" href="/users/removeFriend/<?= $friend['friend_id']?>">Remove as Friend</a>
			</td>
		</tbody>
	<?php		
		}
	?>
	</table>
	</div>


<div class="row">
	<div class="col s4">
		<h5>Other Users not on your friend's list:</h5>
		<table class="bordered">
			<thead>
				<th>Alias</th>
				<th>Action</th>
			</thead>
	<?php foreach($notfriends as $notfriend)
	{
	?>
			<tbody>
				<td><a href="users/friends/<?= $notfriend['id']?>"><?=$notfriend['name']?></td></a>

					
				<td>
					<form action="/users/notFriend/<?= $notfriend['id']?>" method="post">
						<input type="submit" value="Add as friend" class="btn">
						<input type="hidden" value="<?= $notfriend['id']?>" name="friend_id">
					</form>
				</td>
			</tbody>
	<?php
		}
	?>
		</table>
	</div>
</div>
</div>
</body>
</html>