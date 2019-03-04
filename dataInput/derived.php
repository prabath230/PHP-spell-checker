<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Etymology System</title>
	<meta name="description" content="Hello World">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
</head>

<body>
		<header>
			<div class="heading">
				<div class="container">
					<div class="row">
						<div class="col-lg-6">
							<h1><b>Etymology Identification System</b></h1>
							<h3>Insert Records</h3>
						</div>
						<div class="col-lg-2"></div>
						<div class="col-lg-4"><br><br>
							<ul class="nav nav-pills">
								<li>තද්භව</li>
								<li>තත්සම</li>
								<li>නිෂ්පන්න</a></li>
							</ul>
						</div> 
					</div>	
				</div> 
			</div> 
		</header>
		<br><br><br><br><br><br><br>

		<div class="container">
			<form action="derived_word.php" method="post">
				<div class="row">
					<div class="col-lg-2">
						<p>සිංහල වචනය</p>
					</div>
					<div class="col-lg-4">
						<input type="text" class="form-control" placeholder="සිංහල වචනය ඇතුලත් කරන්න" required="required" name="word1" id="word1">
					</div>
				</div><br>
				<div class="row">
					<div class="col-lg-2">
						<p>මූල වචනය</p>
					</div>
					<div class="col-lg-4">
						<input type="text" class="form-control" placeholder="මූල වචනය ඇතුලත් කරන්න" required="required" name="word2" id="word2">
					</div>
				</div><br>
				<div class="row">
					<div class="col-lg-2">
						<p>අයත්වන භාෂාව</p>
					</div>
					<div class="col-lg-4">
						<input type="text" class="form-control" placeholder="වචනය අයත් භාෂාව ඇතුලත් කරන්න" required="required" name="word3" id="word3">
					</div>
				</div><br>
				<div class="row">
					<div class="col-lg-2">
					</div>
					<div class="col-lg-4">
						<button class="btn btn-primary" type="submit">ඇතුලත් කරන්න</button>
					</div>
				</div>
			</form>
		</div>


	<script src="http://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</body>	
</html>