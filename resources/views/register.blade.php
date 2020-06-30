<!DOCTYPE html>
<html>
	<head>
		<title> Register </title>
	</head>
	<body>
		<h1> Buat Account Baru! </h1>
		<h3> Sign Up Form </h3>
		<form action='welcome' method="post">
			@csrf
		<div>
			<p> First Name: </p>
			<input type="text" name="nama1" placeholder="First Name">
			<br>
			<p> Last Name: </p>
			<input type="text" name="nama2" placeholder="Last Name">
		</div>
		<div>
			<p> Gender: </p>
			<input type="radio" name="Gender" value="0"> Male <br>
			<input type="radio" name="Gender" value="1"> Female <br>
		</div>
		<div>
			<p> Nationality: </p>
			<select>
				<option> Indonesian </option>
				<option> Singapore </option>
				<option> Malaysian </option>
				<option> Australian </option>
			</select>
		</div>
		<div> 
			<p> Language Spoken: </p>
			<input type="checkbox"> Bahasa Indonesia <br>
			<input type="checkbox"> English <br>
			<input type="checkbox"> Other <br>
		</div>
		<div>
			<p> Bio: </p>
			<textarea cols="30" rows="6"></textarea>
		</div>
		<input type="submit" value="Sign Up">
		</form>
	</body>
</html>