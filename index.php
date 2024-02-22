<?php

require_once("classe/fonction.php");
$lang = "fr";
if (isset($_GET["l"])) {
  switch ($_GET["l"]) {
    case 'f':
      $lang = "fr";
      break;
    case 'e':
      $lang = "en";
      break;
    default:
      $lang = "fr";
      break;
  }
}

loadRessource($lang);

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
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  <link rel="stylesheet" href="css/light.css" id="theme">
  <style>

  </style>

  <script>
    function toggleTheme() {
      var theme = document.getElementById('theme');
      var navElement = document.getElementById("myNav");


      if (theme.getAttribute('href') === 'css/light.css') {
        theme.href = 'css/dark.css';

        // Remplacez une classe par une autre classe
        navElement.classList.replace('navbar-light', 'navbar-dark');
        navElement.classList.replace('bg-light', 'bg-dark');


      } else {
        theme.href = 'css/light.css';

        // Remplacez une classe par une autre classe
        navElement.classList.replace('navbar-dark', 'navbar-light');
        navElement.classList.replace('bg-dark', 'bg-light');

      }
    }
  </script>

</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-light bg-light" id="myNav">

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
          <li class="nav-item">
            <i class="bi bi-globe2" id="flag"></i>

            <div class="mb-3">
              <select class="form-select" name="flag_select" id="flag_select" style="display:none">
                <option value="f">Fr</option>
                <option value="e">En</option>
              </select>
            </div>
          </li>
          <li class="nav-item">

            <i onclick="toggleTheme()" class="bi bi-back" style="margin-left: 10px;"></i>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <section id="home" style="display: flex; align-items: flex-start; height: 100%;">
    <div class="container px-4 py-5 entete">
      <div class="row row-cols-1 row-cols-md-2 align-items-md-center g-5 py-5">
        <div class="d-flex flex-column align-items-start gap-2">
          <h1 class="fw-bold"><span><?= _getText("nom.moi") ?></span></h1>
          <div id="resume_20_mots" class="">
            <span><?= _getText("resume.20.mots") ?></span>
          </div>

        </div>
        <div id="lang" class="row row-cols-1 row-cols-sm-2 g-4" style="font-size: small;display: flex;justify-content: center;align-items: center;">
          <img src="img/Niry.jpeg" style="width: 400px; height: auto;">
          <div class="d-flex flex-column gap-2">
            <h5 class="fw-semibold mb-0"><?= _getText("language.programation") ?></h5>

            <div class="table-responsive">

              <table class="" width="100%">
                <tr>
                  <td width="50%">
                    <?= _getText("JAVA") ?>
                  </td>
                  <td width="50%">
                    <?= _getText("VB")  ?>
                  </td>
                </tr>
                <tr>
                  <td width="50%">
                    <?= _getText("VBA") ?>
                  </td>
                  <td width="50%" style="display: none;">

                  </td>
                </tr>
              </table>
            </div>

          </div>

          <div class="d-flex flex-column gap-2">
            <h5 class="fw-semibold mb-0"><?= _getText("language.web") ?></h5>
            <div class="table-responsive">
              <table class="" width="100%">
                <tr>
                  <td width="50%">
                    <?= _getText("PHP") ?>
                  </td>
                  <td width="50%">
                    <?= _getText("JSP") ?>
                  </td>
                </tr>
                <tr>
                  <td width="50%">
                    <?= _getText("javascript") ?>
                  </td>
                  <td width="50%">
                    <?= _getText("bootstrap") ?>
                  </td>
                </tr>

              </table>
            </div>
          </div>

          <div class="d-flex flex-column gap-2">
            <h5 class="fw-semibold mb-0"><?= _getText("SGDBR") ?></h5>
            <table class="" width="100%">
              <tr>
                <td width="50%">
                  <?= _getText("ACCESS") ?>
                </td>
                <td width="50%">
                  <?= _getText("MYSQL") ?>
                </td>
              </tr>
              <tr>
                <td width="50%">
                  <?= _getText("ORACLE") ?>
                </td>
                <td width="50%">
                  <?= _getText("POSTGRES") ?>
                </td>
              </tr>
              <tr>
                <td width="50%">
                  <?= _getText("SQL.SERVEUR") ?>
                </td>
                <td width="50%" style="display: none;">

                </td>
              </tr>
            </table>

          </div>

          <div class="d-flex flex-column gap-2">
            <h5 class="fw-semibold mb-0"><?= _getText("autre") ?></h5>
            <table class="" width="100%">
              <tr>
                <td width="50%">
                  <?= _getText("PHOTOSHOP") ?>
                </td>
                <td width="50%">
                  <?= _getText("ILLUSTRATOR") ?>
                </td>
              </tr>

              <tr>
                <td class="td_vide" colspan="2" width="50%">
                  ...
                </td>

              </tr>
              <tr>
                <td class="td_vide" colspan="2" width="50%">
                  ...
                </td>

              </tr>
            </table>
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



          <input placeholder="<?= _getText("filter") ?>" class="input" id="commentFilter" type="text">
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
                  <button data-bs-toggle="modal" data-bs-target="#exampleModal" data-description="<?= _getText("projet.1.desc") ?>" type="button" class="btn btn-sm btn-outline-secondary">

                    <?= _getText("vue") ?>
                  </button>
                </div>
                <small class="text-muted"><?= _getText("MAGASIN") ?></small>
                <small class="text-muted"><?= _getText("PHP") ?></small>
                <small class="text-muted"><?= _getText("MYSQL") ?></small>
                <small class="text-muted"><?= _getText("CHART") ?></small>
                <small class="text-muted"><?= _getText("bootstrap") ?></small>
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
                <small class="text-muted"><?= _getText("bootstrap") ?></small>

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
                <small class="text-muted"><?= _getText("MINISTERE") ?></small>
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
                <small class="text-muted"><?= _getText("PARTICULIER") ?></small>
                <small class="text-muted"><?= _getText("VB") ?></small>
                <small class="text-muted"><?= _getText("ACCESS") ?></small>
                <small class="text-muted"><?= _getText("EXCEL") ?></small>

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
            <img src="img/bazar_mada_site.jpg" class="img-responsive img-fluid" alt="Image">

            <div class="card-body">
              <p class="card-text"><?= _getText("projet.9") ?></p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button data-bs-toggle="modal" data-bs-target="#exampleModal" data-description="<?= _getText("projet.9.desc") ?>" type="button" class="btn btn-sm btn-outline-secondary"><?= _getText("vue") ?></button>

                </div>
                <small class="text-muted"><?= _getText("MINISTERE") ?></small>
                <small class="text-muted"><?= _getText("PHP") ?></small>
                <small class="text-muted"><?= _getText("MYSQL") ?></small>
                <small class="text-muted"><?= _getText("bootstrap") ?></small>
                <small class="text-muted"><?= _getText("CHART") ?></small>
              </div>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card h-100">
            <img src="img/baiboly_malagasy.jpg" class="img-responsive img-fluid" alt="Image">

            <div class="card-body">
              <p class="card-text"><?= _getText("projet.10") ?></p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button data-bs-toggle="modal" data-bs-target="#exampleModal" data-description="<?= _getText("projet.10.desc") ?>" type="button" class="btn btn-sm btn-outline-secondary"><?= _getText("vue") ?></button>

                </div>

                <small class="text-muted"><?= _getText("PARTICULIER") ?></small>
                <small class="text-muted"><?= _getText("VB") ?></small>
                <small class="text-muted"><?= _getText("ACCESS") ?></small>

              </div>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card h-100">
            <img src="img/man-ecrire.jpg" class="img-responsive img-fluid" alt="Image">

            <div class="card-body">
              <p class="card-text"><?= _getText("projet.11") ?></p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button data-bs-toggle="modal" data-bs-target="#exampleModal" data-description="<?= _getText("projet.11.desc") ?>" type="button" class="btn btn-sm btn-outline-secondary"><?= _getText("vue") ?></button>

                </div>
                <small class="text-muted"><?= _getText("BANQUE") ?></small>
                <small class="text-muted"><?= _getText("PHP") ?></small>
                <small class="text-muted"><?= _getText("MYSQL") ?></small>
                <small class="text-muted"><?= _getText("EXCEL") ?></small>

              </div>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card h-100">
            <img src="img/swimmer.jpg" class="img-responsive img-fluid" alt="Image">

            <div class="card-body">
              <p class="card-text"><?= _getText("projet.12") ?></p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button data-bs-toggle="modal" data-bs-target="#exampleModal" data-description="<?= _getText("projet.12.desc") ?>" type="button" class="btn btn-sm btn-outline-secondary"><?= _getText("vue") ?></button>

                </div>
                <small class="text-muted"><?= _getText("PARTICULIER") ?></small>
                <small class="text-muted"><?= _getText("bootstrap") ?></small>
                <small class="text-muted"><?= _getText("MYSQL") ?></small>
                <small class="text-muted"><?= _getText("PHP") ?></small>

              </div>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card h-100">
            <img src="img/paiement_online.jpg" class="img-responsive img-fluid" alt="Image">

            <div class="card-body">
              <p class="card-text"><?= _getText("projet.13") ?></p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button data-bs-toggle="modal" data-bs-target="#exampleModal" data-description="<?= _getText("projet.13.desc") ?>" type="button" class="btn btn-sm btn-outline-secondary"><?= _getText("vue") ?></button>

                </div>
                <small class="text-muted"><?= _getText("PARTICULIER") ?></small>
                <small class="text-muted"><?= _getText("PHP") ?></small>
                <small class="text-muted"><?= _getText("MYSQL") ?></small>
                <small class="text-muted"><?= _getText("E-TRANSACTION") ?></small>

              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100">
            <img src="img/sujet.jpg" class="img-responsive img-fluid" alt="Image">

            <div class="card-body">
              <p class="card-text"><?= _getText("projet.14") ?></p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button data-bs-toggle="modal" data-bs-target="#exampleModal" data-description="<?= _getText("projet.14.desc") ?>" type="button" class="btn btn-sm btn-outline-secondary"><?= _getText("vue") ?></button>

                </div>
                <small class="text-muted"><?= _getText("MINISTERE") ?></small>
                <small class="text-muted"><?= _getText("PHP") ?></small>
                <small class="text-muted"><?= _getText("MYSQL") ?></small>
                <small class="text-muted"><?= _getText("PDF") ?></small>

              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100">
            <img src="img/correction.jpg" class="img-responsive img-fluid" alt="Image">

            <div class="card-body">
              <p class="card-text"><?= _getText("projet.15") ?></p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button data-bs-toggle="modal" data-bs-target="#exampleModal" data-description="<?= _getText("projet.15.desc") ?>" type="button" class="btn btn-sm btn-outline-secondary"><?= _getText("vue") ?></button>

                </div>
                <small class="text-muted"><?= _getText("MINISTERE") ?></small>
                <small class="text-muted"><?= _getText("PHP") ?></small>
                <small class="text-muted"><?= _getText("MYSQL") ?></small>
                <small class="text-muted"><?= _getText("PDF") ?></small>

              </div>
            </div>
          </div>
        </div>



      </div> <!--fin section-->
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
          <!---  <form method="post" action="mail.php">

            <div class="row justify-content-center align-items-center g-2">
              <div class="col">
                <div class="mb-3">
                  <label for="name" class="form-label"><?= _getText("nom") ?></label>
                  <input type="text" class="form-control" name="name" placeholder="<?= _getText("nom") ?>" required>
                </div>
                <div class="mb-3">
                  <label for="email" class="form-label"><?= _getText("email") ?></label>
                  <input type="email" class="form-control" name="email" placeholder="<?= _getText("email") ?>" required>
                </div>
              </div>
              <div class="col">

                <label for="message" class="form-label"><?= _getText("message") ?></label>
                <textarea class="form-control" name="message" rows="5" placeholder="<?= _getText("message") ?>" required></textarea>
              </div>
            </div>
            <button type="submit" class="btn btn-primary"><?= _getText("submit") ?></button>
          </form>-->

          <!-- Horizontal under breakpoint -->



          <ul class="list-unstyled d-flex flex-wrap horizontal-list">
            <li class="list-group-item">
              <a href="https://www.linkedin.com/in/niry-ravelomanantsoa-75780958" target="_blank" title="<?= _getText("linkedin") ?>"> <i class="bi bi-linkedin"></i> </a>
            </li>
            <li class="list-group-item">
              <a href="mailto:niryravel2022@gmail.com" target="_blank" title=" <?= _getText("mail") ?>"><i class="bi bi-mailbox"></i>
              </a>
            </li>
            <li class="list-group-item">
              <a href="https://www.facebook.com/slayerniry" target="_blank" title=" <?= _getText("facebook") ?>"><i class="bi bi-facebook"></i>
              </a>
            </li>

            <li class="list-group-item">
              <a href="#" target="_blank" title=" <?= _getText("twitter") ?>"><i class="bi bi-twitter"></i>
              </a>
            </li>

            <li class="list-group-item">
              <a href="#" target="_blank" title=" <?= _getText("discord") ?>"><i class="bi bi-discord"></i>
              </a>
            </li>

            <li class="list-group-item">
              <a href="#" target="_blank" title=" <?= _getText("instagram") ?>"><i class="bi bi-instagram"></i>
              </a>
            </li>
            <li class="list-group-item">
              <i class="bi bi-phone-vibrate" id="phone_click" title="<?= _getText("phone") ?>"></i>
            </li>
            <li class="list-group-item" id="phone" style="opacity: 0;">
              <?= _getText("tel") ?>
            </li>
            <li class="list-group-item" id="phone1" style="opacity: 0;">
              <?= _getText("tel2") ?>
            </li>
          </ul>


        </div>
      </div>
    </div>
  </section>
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">titre</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <p id="description"></p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><?= _getText("fermer") ?></button>
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

    // Écouteur d'événement pour afficher la description du bouton
    document.querySelectorAll('[data-bs-target="#exampleModal"]').forEach(function(button) {
      button.addEventListener('mouseover', function() {
        const images = this.parentNode.parentNode.parentNode.parentNode.querySelectorAll(".img-responsive");

        const card_text = this.parentNode.parentNode.parentNode.querySelectorAll(".card-text");
        card_text.forEach(function(image) {
          // Modifier les styles CSS de l'image pour la griser
          image.style.filter = "blur(2px) grayscale(100%)";
        });

        images.forEach(function(image) {
          // Modifier les styles CSS de l'image pour la griser
          image.style.filter = "blur(2px) grayscale(100%)";
        });
      });
    });

    // Écouteur d'événement pour afficher la description du bouton
    document.querySelectorAll('[data-bs-target="#exampleModal"]').forEach(function(button) {
      button.addEventListener('mouseout', function() {
        const images = this.parentNode.parentNode.parentNode.parentNode.querySelectorAll(".img-responsive");

        images.forEach(function(image) {
          // Modifier les styles CSS de l'image pour la griser
          image.style.filter = "grayscale(0%)";
        });

        const card_text = this.parentNode.parentNode.parentNode.querySelectorAll(".card-text");
        card_text.forEach(function(image) {
          // Modifier les styles CSS de l'image pour la griser
          image.style.filter = "grayscale(0%)";
        });
      });
    });
  </script>

  <script>
    document.addEventListener("DOMContentLoaded", function() {

      //Sélectionner l'élément à partir de l'ID
      const phoneToggle = document.getElementById('phone_click');
      const phoneList = document.getElementById('phone');
      const phoneList1 = document.getElementById('phone1');

      const flag = document.getElementById('flag');
      const flag_select = document.getElementById('flag_select');
      flag_select.style.display = 'none';
      flag_select.value = "f";
      <?php
      if (isset($_GET["l"])) { ?>
        flag_select.value = "<?= $_GET["l"] ?>";
      <?php } ?>

      flag.addEventListener('click', function() {
        flag_select.style.display = 'block';
        flag.style.display = 'none';
      });

      flag_select.addEventListener('change', function() {

        location.href = "<?= $_SERVER["PHP_SELF"] ?>?l=" + this.value;
      });


      // Ajouter un gestionnaire d'événement pour le clic
      phoneToggle.addEventListener('click', function() {
        // Vérifier si la liste de téléphones est cachée
        if (phoneList.style.opacity === '0') {
          // Afficher la liste de téléphones avec une transition de 2 secondes
          phoneList.style.transition = 'opacity 2s';
          phoneList.style.opacity = '1';
        } else {
          // Cacher la liste de téléphones avec une transition de 2 secondes
          phoneList.style.transition = 'opacity 2s';
          phoneList.style.opacity = '0';
        }

        // Vérifier si la liste de téléphones est cachée
        if (phoneList1.style.opacity === '0') {
          // Afficher la liste de téléphones avec une transition de 2 secondes
          phoneList1.style.transition = 'opacity 2s';
          phoneList1.style.opacity = '1';
        } else {
          // Cacher la liste de téléphones avec une transition de 2 secondes
          phoneList1.style.transition = 'opacity 2s';
          phoneList1.style.opacity = '0';
        }
      });



      function filterCommentCards(txt) {
        const commentCards = document.querySelectorAll("#service .card");

        const filterValue = txt.toLowerCase();

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

      }

      const commentFilterInput = document.getElementById("commentFilter");


      commentFilterInput.addEventListener("input", function() {

        filterCommentCards(commentFilterInput.value);

      });


      const smallElements = document.querySelectorAll('small.text-muted');

      smallElements.forEach((smallElement) => {
        smallElement.addEventListener('click', () => {
          const text = smallElement.innerHTML;

          document.getElementById("commentFilter").value = text;
          filterCommentCards(text);


        });
      });


    });
  </script>


</body>

</html>