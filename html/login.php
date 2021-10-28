<?php
	include_once 'navbar.php';
?>
			<div id="form">
				<form method="post" action="/includeslogin.inc.php" id="login-form">
					<div>
						<input type="text" id="email" name="email" placeholder="E-Mail">
						<br>
						<input type="password" id="pword" name="lname" placeholder="Password">
					</div>
				</form>
				<div>
					<button type="submit" form="login-form" value="Submit">Log In!</button>
				</div>
			</div>
		</div>
		<!--[if lt IE 7]>
			<p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
		<![endif]-->
		<script src="" async defer></script>
	</body>
</html>