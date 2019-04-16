<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="css/inscription.css">
<title>construction</title>
</head>
<body>
<?php include 'include/header.php' ?>
<section class="principale">
<header>
    <div class="contenu">
        <div class="form">
			<form class="form" action="class/traitement.php" , method="post" enctype="multipart/form-data">
            <h2>Mercir d'enrichire notre base de plan </h2>
				<!-- nom -->
				<div class="col-sm">
					<div class="form-group">
					<input type="file" name="image" id="image" placeholder=" charger l'images du plan " class="form-control">
					</div>
				</div>
				<div class="from-group">
					<input type="submit" value="s'inscrire" class="btn btn-success">
				</div>
			</form>
        </div>
    </div>
</header>    
</section>
</body>
</html>

