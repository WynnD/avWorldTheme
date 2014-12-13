<!DOCTYPE HTML>
<html>
	<head>
		<title><?php bloginfo('name'); ?></title>
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta name="viewport" content="width=device-width">
		<link href='http://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Lora:400,700,700italic,400italic' rel='stylesheet' type='text/css'>
		<?php wp_head(); ?>
	</head>

	<body>
		<div class="login-page">
			<div class="signup-left">
				<form class="signup" method="post" action="">

					<label for="fullname">Name</label>
					<input type="text" id="fullname" name="name"/>

					<label for="email">Email Address</label>
					<input type="email" id="email" name="email"/>

					<label for="phone">Phone</label>
					<input type="tel" id="phone" name="phone"/>

					<label for="ispilot">Are you a pilot?</label>
					<input type="checkbox" id="ispilot" name="ispilot"/>

					<label for="learntofly">Do you want to learn to fly?</label>
					<input type="checkbox" id="learntofly" name="learnfly"/>

					<label for="flightfreq">How many airline flights do you take each month?</label>
					<input type="text" id="flightfreq" name="flightfreq"/>

					<input class="submit" type="submit" value="Sign Up">
					
				</form>
			</div>

			<div class="login-right">
				<h3>Visited us before? Sign in.</h3>
				<form class="login" method="post">

					<label for="login-email">Email</label>
					<input type="email" id="login-email" name="login-email"/>
					<input class="submit" type="submit" value="Log In">
				</form>
			</div>
		</body>
</html>