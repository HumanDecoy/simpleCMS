
	<!-- NAVBAR -->
	<nav class="navbar navbar-toggleable-md navbar-light bg-faded" style="background-color: #b5d7e5;">
		<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<a class="navbar-brand" style="font-family: 'Love Ya Like A Sister', cursive;"  href="index.php">Blöggportaelen</a>

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item">
					<a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
				</li>
				<?
				if ($_SESSION["loggedIn"] === true){
					echo"<li class='nav-item'>
					<a class='nav-link' href='partials/blog.php'>New Blogpost</a>
				</li>";}
				?>
			</ul>
			<ul class="nav navbar-nav navbar-right">	
				<?
				if ($_SESSION["loggedIn"] === true){
					echo"<li class='nav-item'>
					<a class='nav-link' href='logout.php'>Logout</a>
				</li>";}
				else{
					echo"<li class='nav-item'>
					<a class='nav-link' href='login.php'>Login</a>";
					echo"<li class='nav-item'>
					<a class='nav-link' href='createuser.php'>Register</a></li>";
				} ?>
			</ul>
			<form class="form-inline my-2 my-lg-0">
			</form>
		</div>
	</nav>
	<!-- END NAVBAR -->
