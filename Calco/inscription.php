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
            <h2>Mercie de nous donne plus d'information sur vous</h2>
                    <div class="row">
                        <!-- nom -->
                        <div class="col-sm">
                            <div class="form-group">
                            <input type="text" name="nom" id="nom" placeholder=" votre nom" class="form-control">
                            </div>
                        </div>
                        <!-- prenoms -->
                        <div class="col-sm">
                            <div class="form-group">
                                <input type="text" name="prenoms" id="prenoms" placeholder=" votre prenoms" class="form-control">
                            </div>
                        </div>
                    </div>
                        <!-- numero -->
                    <div class="row">
                        <div class="col-sm">
                            <div class="form-group">
                                <select name="NumPays" id="NumPays" class="form-control">
                                    <option value="">Cote d'ivoire +225</option>
                                    <option value="">Cote d'ivoire +225</option>
                                    <option value="">Cote d'ivoire +225</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm">
                            <div class="form-group">
                                <input type="number" name="numero" id="numero" placeholder=" votre numero" class="form-control">
                            </div>
                        </div>
                    </div>
                        <!-- fin numero -->
                    <div class="form-group">
                        <input type="email" name="email" id="email" placeholder="adresse email" class="form-control">
                    </div>
                    <div class="row">
                        <!-- nom -->
                        <div class="col-sm">
                            <div class="form-group">
                            <input type="password" name="pass1" id="pass" placeholder=" mot de passe " class="form-control">
                            </div>
                        </div>
                        <!-- prenoms -->
                        <div class="col-sm">
                            <div class="form-group">
                                <input type="password" name="pass2" id="pass" placeholder=" confirmer " class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="from-group">
                        <input type="submit" value="s'inscrire" class="btn btn-success">
                    </div>

                </div>
            </div>
        </div>
    </div>
</header>

<div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="my-modal-title" aria-hidden="true" id="connexion">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="my-modal-title">connexion</h5>
                <button class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form">
                    <form action="">
                        <div class="form-group">
                        <i class="fas fa-user"></i><input type="text" name="" id="" placeholder="Login" class="form-control" >
                        </div>
                        <div class="form-group">
                        <input type="password" name="" id="" class="form-control" placeholder="password">
                        </div>
                        <div class="form-group">
                        </div>
                        <div class="col-sm">
                        <input type="submit" value="connecter" class="btn btn-success">
                    </div>
                </div>
                </form>

            </div>
            <div class="modal-footer">
                        <button class="btn btn-danger"> fermer</button>
                </div>
            </div>
        </div>
    </div>
</div>
    
</section>
</body>
</html>