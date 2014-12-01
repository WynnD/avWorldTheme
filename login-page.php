<?php

get_header();

?>

<div class="login-page">
	<div class="signup-wrapper">
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

	<div class="login-wrapper">
		<form class="login" method="post">

			<label for="login-email">Email</label>
			<input type="email" id="login-email" name="login-email"/>
			<input class="submit" type="submit" value="Log In">
		</form>
	</div>