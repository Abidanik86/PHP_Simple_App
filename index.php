<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit"])) {
    $userName = isset($_POST['name']) ? $_POST['name'] : '';
    echo '<h1 class="hero">The User\'s name is ' . htmlspecialchars($userName) . ' 💟</h1>';
}
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Hello Bee Code 🐝</title>
	<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
	<div class="container">
		<div class="holder">
			<form action="index.php" method="POST">
				<div class="wrapper">
					<input type="text" placeholder="Write the username" name="name">
					<br>
					<br>
					<div class="wrapper">
						<input type="submit" value="submit" name="submit">
					</div>				
				</div>
			</form>
		</div>
	</div>
	 <footer>
       &copy; 2024 by Abid Hasan Anik
        <a href="mailto:" style="color: lightpink;">abidanik86@gmail.com</a> 
    </footer>
</body>
</html>
