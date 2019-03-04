<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title> සිංහල අක්ෂර නිවැරදි කරනය</title>
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
								<li><a href="index.php">තද්භව</a></li>
								<li><a href="loaned.php">තත්සම</a></li>
								<li class="active"><a href="original.php">නිෂ්පන්න</a></li>
							</ul>
						</div> 
					</div>	
				</div> 
			</div> 
		</header>
		<br><br><br><br><br><br><br>

		<div class="container">
			<form action="original_words.php" method="post">
				<div class="row">
					<div class="col-lg-2">
						<p>සිංහල වචනය</p>
					</div>
					<div class="col-lg-4">
						<input type="text" class="form-control" placeholder="සිංහල වචනය ඇතුලත් කරන්න" required="required" name="word">
					</div>
				</div><br>
				<div class="row">
					<div class="col-lg-2">
						<p>අර්ථය</p>
					</div>
					<div class="col-lg-4">
						<input type="text" class="form-control" placeholder="වචන අර්ථය ඇතුලත් කරන්න" required="required" name="mening">
					</div>
				</div><br>
				<div class="row">
					<div class="col-lg-2">
					</div>
					<div class="col-lg-4">
						<button class="btn btn-primary" type="submit" name="add">ඇතුලත් කරන්න</button>
					</div>
				</div>
			</form>
		</div>


	<script src="http://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</body>	
</html>