<?php
	include_once 'navbar.php';
?>
			<div id="form">
				<form method="post" action="includes/signup.inc.php" id="signup-form">
					<div>
						<input type="text" name="name" placeholder="Full Name">
						<br>
						<input type="text" name="uname" placeholder="Username">
						<br>
						<input type="text" name="email" placeholder="E-Mail">
						<br>
						<input type="password" name="pwd" placeholder="Password">
						<br>
						<input type="password" name="confpwd" placeholder="Confirm Password"><br>
					</div>
					<div>
						<button type="submit" form="signup-form" value="Submit">Sign Up!</button>
					</div>
				</form>
			</div>
		</div>
		<!--[if lt IE 7]>
			<p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
		<![endif]-->
		<script src="" async defer></script>
	</body>
</html>