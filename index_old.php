<?php

require_once("classe/fonction.php");

loadRessource("fr");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= _getText("nom.non.br") ?></title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/cover.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/animate.min.css">

    <style>
        .list-group li {
            background-color: #000;
            color: #ABABAB;
        }


        .modal-dialog {
            box-shadow: 10px 10px 30px -4px rgba(0, 173, 173, 0.75);
            -webkit-box-shadow: 10px 10px 30px -4px rgba(0, 173, 173, 0.75);
            -moz-box-shadow: 10px 10px 30px -4px rgba(0, 173, 173, 0.75);
        }

        img {
            object-fit: cover;
            height: 100%;
            width: 100%;
        }

        .card {
            width: 95%;


        }

        .card_3 {
            display: inline-block;
            margin: 0 0.5rem;

            animation: tada;
            /* referring directly to the animation's @keyframe declaration */
            animation-duration: 2s;
            /* don't forget to set a duration! */

            box-shadow: 10px 10px 30px -4px rgba(0, 173, 173, 0.75);
            -webkit-box-shadow: 10px 10px 30px -4px rgba(0, 173, 173, 0.75);
            -moz-box-shadow: 10px 10px 30px -4px rgba(0, 173, 173, 0.75);
        }

        .card_3:hover {

            box-shadow: 10px 10px 5px 0px rgba(43, 39, 39, 0.75);
            -webkit-box-shadow: 10px 10px 5px 0px rgba(43, 39, 39, 0.75);
            -moz-box-shadow: 10px 10px 5px 0px rgba(43, 39, 39, 0.75);

        }

        hr {
            border: none;
            border-top: 1px solid #FFF;
        }

        #resume_20_mots {
            display: inline-block;
            margin: 0 0.5rem;

            animation: bounceInLeft;
            /* referring directly to the animation's @keyframe declaration */
            animation-duration: 2s;
            /* don't forget to set a duration! */
        }

        h1 {

            color: #00ADAD;

            display: inline-block;
            margin: 0 0.5rem;

            animation: backInRight;
            /* referring directly to the animation's @keyframe declaration */
            animation-duration: 2s;
            /* don't forget to set a duration! */
        }

        h1:hover {

            color: #ABABAB;
        }


        h2 {
            color: #00ADAD;
        }

        .card-header {
            background-color: #005B60;
            color: #ABABAB;
        }

        .card-body {
            background-color: #000;
            color: #ABABAB;
        }

        .form-control {
            background-color: #000;
            color: #ABABAB;
        }


        .text-muted li {
            list-style-type: disc;
            padding-left: 20px;
        }

        .form-control-sm {
            height: calc(1.5em + 0.5rem + 2px);
            padding: 0.25rem 0.5rem;
            font-size: 0.875rem;
        }

        img {
            width: 350px;
            height: auto;
        }
    </style>

</head>

<body style="background-color: black;">

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">

        <div class="container">

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#home"><?= _getText("home") ?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about"><?= _getText("about") ?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#service"><?= _getText("service") ?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact"><?= _getText("contact") ?></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <section id="home" style="display: flex; align-items: flex-start; height: 100%;">
        <div class="container px-4 py-5 entete">
            <div class="row row-cols-1 row-cols-md-2 align-items-md-center g-5 py-5" style="color: #ABABAB !important ;">
                <div class="d-flex flex-column align-items-start gap-2">
                    <h1 class="fw-bold"><span><?= _getText("nom") ?></span></h1>
                    <div id="resume_20_mots" class="text-muted ">
                        <span><?= _getText("resume.20.mots") ?></span>
                    </div>

                </div>
                <div class="row row-cols-1 row-cols-sm-2 g-4" style="font-size: small;display: flex;justify-content: center;align-items: center;">
                    <img src="img/geek.jpg" style="width: 300px; height: auto;">
                    <div class="d-flex flex-column gap-2">
                        <h5 class="fw-semibold mb-0"><?= _getText("language.programation") ?></h5>
                        <ul class="list-group">
                            <li class="list-group-item">
                                <span class="badge">JAVA</span>
                                <div class="progress progress-sm progress-half-rounded m-none mt-xs light">
                                    <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"></div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <span class="badge">VB</span>
                                <div class="progress progress-sm progress-half-rounded m-none mt-xs light">
                                    <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 80%;"></div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <span class="badge">WINDEV</span>
                                <div class="progress progress-sm progress-half-rounded m-none mt-xs light">
                                    <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 40%;"></div>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <div class="d-flex flex-column gap-2">
                        <h5 class="fw-semibold mb-0"><?= _getText("language.web") ?></h5>
                        <ul class="list-group">
                            <li class="list-group-item">
                                <span class="badge">PHP</span>
                                <div class="progress progress-sm progress-half-rounded m-none mt-xs light">
                                    <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 90%;"></div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <span class="badge">JSP</span>
                                <div class="progress progress-sm progress-half-rounded m-none mt-xs light">
                                    <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"></div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <span class="badge">Javascript</span>
                                <div class="progress progress-sm progress-half-rounded m-none mt-xs light">
                                    <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 70%;"></div>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <div class="d-flex flex-column gap-2">
                        <h5 class="fw-semibold mb-0"><?= _getText("SGDBR") ?></h5>

                        <ul class="list-group">
                            <li class="list-group-item">
                                <span class="badge">Ms Access</span>
                                <div class="progress progress-sm progress-half-rounded m-none mt-xs light">
                                    <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 90%;"></div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <span class="badge">SQL Server</span>
                                <div class="progress progress-sm progress-half-rounded m-none mt-xs light">
                                    <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"></div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <span class="badge">MySQL</span>
                                <div class="progress progress-sm progress-half-rounded m-none mt-xs light">
                                    <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 80%;"></div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <span class="badge">ORACLE</span>
                                <div class="progress progress-sm progress-half-rounded m-none mt-xs light">
                                    <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 70%;"></div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <span class="badge">PostGreSQL</span>
                                <div class="progress progress-sm progress-half-rounded m-none mt-xs light">
                                    <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 80%;"></div>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <div class="d-flex flex-column gap-2" style="">
                        <h5 class="fw-semibold mb-0"><?= _getText("autre") ?></h5>
                        <ul class="list-group">
                            <li class="list-group-item">
                                <span class="badge">Adobe</span>
                                <div class="progress progress-sm progress-half-rounded m-none mt-xs light">
                                    <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 40%;"></div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="about">
        <div class="container">
            <hr>
            <div class="row align-item-center">
                <div class="col-lg-12 spacing">
                    <h2><?= _getText("about") ?></h2>

                </div>
            </div>
            <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
                <div class="col">
                    <div class="card mb-4 rounded-3 card_3">
                        <div class="card-header py-3">
                            <h4 class="my-0 fw-normal"><?= _getText("objectif") ?></h4>
                        </div>
                        <div class="card-body" style="height: 200px;">
                            <?= _getText("objectif.detail") ?>

                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card mb-4 rounded-3 card_3">
                        <div class="card-header py-3">
                            <h4 class="my-0 fw-normal"><?= _getText("competence") ?></h4>
                        </div>
                        <div class="card-body" style="height: 200px;">
                            <?= _getText("competence.detail") ?>

                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card mb-4 rounded-3 card_3">
                        <div class="card-header py-3">
                            <h4 class="my-0 fw-normal"><?= _getText("experience.pertiente") ?></h4>
                        </div>
                        <div class="card-body" style="height: 200px;">
                            <?= _getText("experience.pertiente.detail") ?>

                        </div>
                    </div>
                </div>
            </div>
    </section>
    <section id="service">
        <div class="container">
            <hr>
            <div class="row">
                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                    <h2 class=""><?= _getText("service") ?></h2>
                </div>
                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                    <input type="text" class="form-control" id="commentFilter" placeholder="Filtrer...">
                </div>
            </div>
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                <div class="col">
                    <div class="card h-100">
                        <img src="img/gestion_de_stock.jpg" class="img-responsive img-fluid img-fluid" alt="Image">
                        <div class="card-body">
                            <p class="card-text"><?= _getText("projet.1") ?></p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button data-bs-toggle="modal" data-bs-target="#exampleModal" data-description="<?= _getText("projet.1.desc") ?>" type="button" class="btn btn-sm btn-outline-secondary"><?= _getText("vue") ?></button>

                                </div>
                                <small class="text-muted"><?= _getText("MAGASIN") ?></small>
                                <small class="text-muted"><?= _getText("PHP") ?></small>
                                <small class="text-muted"><?= _getText("MYSQL") ?></small>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <img src="img/bulletin.jpg" class="img-responsive img-fluid" alt="Image">

                        <div class="card-body">
                            <p class="card-text"><?= _getText("projet.2") ?></p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button data-bs-toggle="modal" data-bs-target="#exampleModal" data-description="<?= _getText("projet.2.desc") ?>" type="button" class="btn btn-sm btn-outline-secondary"><?= _getText("vue") ?></button>

                                </div>
                                <small class="text-muted"><?= _getText("ETAB") ?></small>
                                <small class="text-muted"><?= _getText("PHP") ?></small>
                                <small class="text-muted"><?= _getText("MYSQL") ?></small>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <img src="img/gestion_incident.jpg" class="img-responsive img-fluid" alt="Image">

                        <div class="card-body">
                            <p class="card-text"><?= _getText("projet.3") ?></p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button data-bs-toggle="modal" data-bs-target="#exampleModal" data-description="<?= _getText("projet.3.desc") ?>" type="button" class="btn btn-sm btn-outline-secondary"><?= _getText("vue") ?></button>

                                </div>
                                <small class="text-muted"><?= _getText("BANQUE") ?></small>
                                <small class="text-muted"><?= _getText("JSP") ?></small>
                                <small class="text-muted"><?= _getText("ORACLE") ?></small>
                                <small class="text-muted"><?= _getText("JAVAEE") ?></small>


                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <img src="img/gestion_de_dossier.jpg" class="img-responsive img-fluid" alt="Image">

                        <div class="card-body">
                            <p class="card-text"><?= _getText("projet.4") ?></p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button data-bs-toggle="modal" data-bs-target="#exampleModal" data-description="<?= _getText("projet.4.desc") ?>" type="button" class="btn btn-sm btn-outline-secondary"><?= _getText("vue") ?></button>

                                </div>
                                <small class="text-muted"><?= _getText("MINISTERE") ?></small>
                                <small class="text-muted"><?= _getText("PHP") ?></small>
                                <small class="text-muted"><?= _getText("MYSQL") ?></small>
                                <small class="text-muted"><?= _getText("SMS") ?></small>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <img src="img/manuel_de_procedure.jpg" class="img-responsive img-fluid" alt="Image">

                        <div class="card-body">
                            <p class="card-text"><?= _getText("projet.5") ?></p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button data-bs-toggle="modal" data-bs-target="#exampleModal" data-description="<?= _getText("projet.5.desc") ?>" type="button" class="btn btn-sm btn-outline-secondary"><?= _getText("vue") ?></button>

                                </div>
                                <small class="text-muted"><?= _getText("BANQUE") ?></small>
                                <small class="text-muted"><?= _getText("PHP") ?></small>
                                <small class="text-muted"><?= _getText("MYSQL") ?></small>

                                <small class="text-muted"><?= _getText("DOCKBOOK") ?></small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <img src="img/acte.jpg" class="img-responsive img-fluid" alt="Image">

                        <div class="card-body">
                            <p class="card-text"><?= _getText("projet.6") ?></p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button data-bs-toggle="modal" data-bs-target="#exampleModal" data-description="<?= _getText("projet.6.desc") ?>" type="button" class="btn btn-sm btn-outline-secondary"><?= _getText("vue") ?></button>

                                </div>
                                <small class="text-muted"><?= _getText("MINISTERE") ?></small>
                                <small class="text-muted"><?= _getText("VB") ?></small>
                                <small class="text-muted"><?= _getText("SQL.SERVEUR") ?></small>
                                <small class="text-muted"><?= _getText("ACCESS") ?></small>


                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <img src="img/comptabilite.jpg" class="img-responsive img-fluid" alt="Image">

                        <div class="card-body">
                            <p class="card-text"><?= _getText("projet.7") ?></p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button data-bs-toggle="modal" data-bs-target="#exampleModal" data-description="<?= _getText("projet.7.desc") ?>" type="button" class="btn btn-sm btn-outline-secondary"><?= _getText("vue") ?></button>

                                </div>

                                <small class="text-muted"><?= _getText("VB") ?></small>
                                <small class="text-muted"><?= _getText("ACCESS") ?></small>
                                <small class="text-muted"><?= _getText("CRYSTAL.REPORT") ?></small>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <img src="img/taxe.jpg" class="img-responsive img-fluid" alt="Image">

                        <div class="card-body">
                            <p class="card-text"><?= _getText("projet.8") ?></p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button data-bs-toggle="modal" data-bs-target="#exampleModal" data-description="<?= _getText("projet.8.desc") ?>" type="button" class="btn btn-sm btn-outline-secondary"><?= _getText("vue") ?></button>

                                </div>

                                <small class="text-muted"><?= _getText("MINISTERE") ?></small>
                                <small class="text-muted"><?= _getText("PHP") ?></small>
                                <small class="text-muted"><?= _getText("POSTGRES") ?></small>
                                <small class="text-muted"><?= _getText("BIRT") ?></small>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <img src="img/baiboly_malagasy.jpg" class="img-responsive img-fluid" alt="Image">

                        <div class="card-body">
                            <p class="card-text"><?= _getText("projet.9") ?></p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button data-bs-toggle="modal" data-bs-target="#exampleModal" data-description="<?= _getText("projet.9.desc") ?>" type="button" class="btn btn-sm btn-outline-secondary"><?= _getText("vue") ?></button>

                                </div>
                                <small class="text-muted"><?= _getText("VB") ?></small>
                                <small class="text-muted"><?= _getText("ACCESS") ?></small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        </div>
    </section>
    <section id="contact">
        <div class="container">

            <hr>
            <div class="row align-item-center">
                <div class="col-lg-12 spacing">
                    <h2><?= _getText("contact") ?></h2>

                </div>
            </div>
            <div class="card h-100">

                <div class="card-body">
                    <form>

                        <div class="row justify-content-center align-items-center g-2">
                            <div class="col">
                                <div class="mb-3">
                                    <label for="name" class="form-label"><?= _getText("nom") ?></label>
                                    <input type="text" class="form-control" id="name" placeholder="<?= _getText("nom") ?>" required>
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label"><?= _getText("email") ?></label>
                                    <input type="email" class="form-control" id="email" placeholder="<?= _getText("email") ?>" required>
                                </div>
                            </div>
                            <div class="col">

                                <label for="message" class="form-label"><?= _getText("message") ?></label>
                                <textarea class="form-control" id="message" rows="5" placeholder="<?= _getText("message") ?>" required></textarea>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                    <div class="contact-methods">
                        <a href="mailto:slayerniry@gmail.com"><i class="bi bi-envelope-fill"></i></a>
                        <a href="https://www.facebook.com/your-facebook-profile"><i class="bi bi-facebook"></i></a>
                    </div>
                </div>
            </div>
        </div>


    </section>



    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content" style="background-color: #000;color: #FFF;">
                <div class="modal-header" style="background-color: #005B60;">
                    <h5 class="modal-title" id="exampleModalLabel">titre</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p id="description"></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                </div>
            </div>
        </div>
    </div>


    <!-- Bootstrap JS -->
    <script src="js/bootstrap.bundle.min.js"></script>

    <script>
        var myModal = new bootstrap.Modal(document.getElementById('exampleModal'));

        // Écouteur d'événement pour afficher la description du bouton
        document.querySelectorAll('[data-bs-target="#exampleModal"]').forEach(function(button) {
            button.addEventListener('click', function() {

                var title = this.parentNode.parentNode.parentNode.textContent.replace("Vue", "");


                document.getElementById('exampleModalLabel').textContent = title;

                var description = this.getAttribute('data-description');
                document.getElementById('description').innerHTML = description;
            });
        });
    </script>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const commentFilterInput = document.getElementById("commentFilter");
            const commentCards = document.querySelectorAll("#service .card");

            commentFilterInput.addEventListener("input", function() {
                const filterValue = commentFilterInput.value.toLowerCase();

                commentCards.forEach(function(card) {
                    const cardTextElements = card.querySelectorAll(".card-text, .text-muted");
                    const cardParent = card.closest(".col");

                    let showCard = false;

                    cardTextElements.forEach(function(element) {
                        const elementText = element.textContent.toLowerCase();

                        if (elementText.includes(filterValue)) {
                            showCard = true;
                        }
                    });

                    cardParent.style.display = "block";

                    if (showCard) {
                        card.classList.remove("d-none");
                        card.classList.add("show", "fade");
                        if (cardParent) {
                            cardParent.classList.add("col");
                        }
                    } else {
                        card.classList.remove("show");
                        card.classList.add("fade");
                        if (cardParent) {
                            //cardParent.classList.remove("col");
                            cardParent.style.display = "none";
                        }
                    }
                });
            });
        });
    </script>






</body>

</html>