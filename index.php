<?php
include 'action.php';
?>
<!DOCTYPE html>
<html>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contactez-nous</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootswatch/4.5.2/litera/bootstrap.min.css" integrity="sha384-enpDwFISL6M3ZGZ50Tjo8m65q06uLVnyvkFO3rsoW0UC15ATBFz3QEhr3hmxpYsn" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">
    <link href="./css/style.css" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>


</head>

<body>
    <nav class="navbar navbar-dark bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">ContactForm </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <!-- <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                </ul> -->
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="mt-5 formContent">
            <div class="row justify-content-center">
                <div class="col-10">
                    <div class="heading">
                        <h2 class="mt-5 m-4 text-center">Contactez-nous</h2>
                    </div>
                    <div class="divider mb-4"></div>
                    <?php if (isset($_SESSION['response'])) { ?>
                        <div class="alert alert-<?= $_SESSION['res_type']; ?> alert-dismissible text-center">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                            <strong><?= $_SESSION['response']; ?></strong>
                        </div>
                    <?php }
                    unset($_SESSION['response']); ?>
                </div>

                <form id="contact-form" action="action.php" method="post" enctype="multipart/form-data">
                    <div class="row justify-content-center">
                        <div class="col-5">
                            <label for="firstname">Prénom <span class="blue">*</span></label>
                            <input id="firstname" type="text" name="nom" class="form-control" placeholder="Votre prénom" value="">
                            <p class="comments"></p>
                        </div>
                        <div class="col-5">
                            <label for="name">Nom <span class="blue">*</span></label>
                            <input id="name" type="text" name="prenom" class="form-control" placeholder="Votre Nom" value="">
                            <p class="comments"></p>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-5">
                            <label for="email">Email <span class="blue">*</span></label>
                            <input id="email" type="text" name="email" class="form-control" placeholder="Votre Email" value="">
                            <p class="comments"></p>
                        </div>
                        <div class="col-5">
                            <label for="phone">Téléphone</label>
                            <input id="phone" type="tel" name="telephone" class="form-control" placeholder="Votre Téléphone" value="">
                            <p class="comments"></p>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-10">
                            <label for="message">Message <span class="blue">*</span></label>
                            <textarea id="message" name="message" class="form-control" placeholder="Votre Message" rows="4"></textarea>
                            <p class="comments"></p>
                        </div>
                        <div class="col-10">
                            <p class="blue"><strong>* Ces informations sont requises.</strong></p>
                        </div>
                        <div class="col-10">
                            <input type="submit" name="submitBtn" class="mb-3 btn btn-success" value="Envoyer">
                        </div>
                    </div>

            </div>

        </div>

        </form>

    </div>
    </div>
    </div>
</body>

</html>