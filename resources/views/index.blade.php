<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>PassGen</title>
</head>
<style>
	html{
		margin: 100px;
	}
</style>
<body>

	<h1>
		PassGen
	</h1>
	<br>
	<form action="/postpg" method="post" name="Passgen">
		@csrf
		<label for="password">
			<b>Password:</b>
		</label>
		<br>
		<input type="password" name="password">
		<br>
		<input type="submit" name="submit" value="Generates">
	</form>

	
</body>
</html>