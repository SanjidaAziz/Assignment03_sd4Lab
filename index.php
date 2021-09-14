
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link type="text/css" rel="stylesheet" href="css/mystylesheet.css" />

	<title>180204122</title>
</head>

<body>
	<header></header>

	<main>
		<div class="container">
			<div class="row ms-5 me-5 p-0 justify-content-center">
				<div class="col-8 bg-dark shadow-lg border-0 rounded p-4  text-white text-center">
				<h1>Contact Us</h1>
				</div>
			</div>
			<div class="row ms-5 me-5 fw-bold p-0 justify-content-center">
				<div class="col-md-8 bg-light shadow-lg border-0 rounded p-5 pb-1 mb-0">

					<form action="data.php" method="POST" >
						
						<div class=" mb-3">
							<label class="form-label">Name*</label>
							<input type="text" name="username" value="" class="form-control" placeholder="Enter your name" required>
						</div>
						<div class="mb-3">
							<label class="form-label">Email address*</label>
							<input type="email" name="useremail" value="" class="form-control" placeholder="Enter your email address" aria-describedby="emailHelp" required>
						</div>
						<div class=" mb-3">
							<label class="form-label">Phone*</label>
							<input type="tel" name="userphone" value="" class="form-control" placeholder="Enter your phpne number" required>
						</div>
						<div class=" mb-3">
							<label class="form-label">Massege*</label>
							<textarea name="usermsg" class="form-control" rows="3" required></textarea>
						</div>
						<div class="row justify-content-end p-0 m-0">
							
							<div class="col-1 p-0 m-4">
							  <button type="submit" class=" btn btn-outline-dark fw-bold">Submit</button>
							</div>
							
						</div>
						<div class="row justify-content-end p-0 m-0 pb-3">							
							<div class="col-3 pe-0 me-0">
							  <a class="btn btn-link pe-0 me-0 text-right " href="data.php" role="button">See other responses</a>
							</div>							
						</div>						
					</form>					
				</div>								
			</div>			
		</div>
	</main>

	<footer></footer>

	<script src="js/bootstrap.bundle.min.js"></script>

</body>

</html>