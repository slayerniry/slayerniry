<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bootstrap 5 Filter and Tab</title>
  <link rel="stylesheet" href="https://unpkg.com/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>

<body>

  <h5>Problème</h5>
  <p>La gestion inefficace des stocks, entraînant des pertes financières et une charge de traitement des données excessive. Notre objectif était de résoudre ce problème de manière efficace et durable.</p>
  <h5>Solution proposé </h5>
  <p>Il repose sur la méthode FIFO (First In, First Out), permettant ainsi une gestion précise et transparente des stocks. En plus de cela, notre application offre des fonctionnalités avancées telles que la possibilité de paiements différés et l'archivage des données pour une meilleure gestion à long terme.</p>
  <p>L'utilisation des technologies Bootstrap, jQuery, chart.js, datatable.js et tabulator.js a été essentielle pour offrir une visualisation moderne et conviviale des données. Ces outils nous ont permis de présenter les informations de manière claire et concise, garantissant ainsi une expérience utilisateur optimale.</p>
  <h5>Appréciation du client</h5>
  <p>Il a constaté une amélioration significative de l'efficacité opérationnelle et de la gestion des ressources grâce à notre application. De plus, notre plateforme fournit des statistiques et des graphiques en temps réel, offrant ainsi une base solide pour une prise de décision éclairée. Grâce à la méthode FIFO, nous parvenons à gérer efficacement les pertes.</p>

  <p>Dans l'ensemble, notre solution représente une approche moderne de la gestion des stocks, parfaitement adaptée aux besoins spécifiques de notre client. Nous sommes fiers d'avoir pu résoudre efficacement Problème initial et de fournir une application qui améliore l'efficacité opérationnelle tout en facilitant la prise de décision.</p>



  <script src="https://unpkg.com/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>

<script>
  function filterCommentCards() {
    const commentfilterinput = document.getElementById("commentfilter");
    const commentcards = document.querySelectorAll("#service .card");

    commentfilterinput.addEventListener("input", function() {
      const filtervalue = commentfilterinput.value.toLowerCase();

      commentcards.forEach(function(card) {
        const cardtextelements = card.querySelectorAll(".card-text, .text-muted");
        const cardparent = card.closest(".col");

        let showcard = false;

        cardtextelements.forEach(function(element) {
          const elementtext = element.textContent.toLowerCase();

          if (elementtext.includes(filtervalue)) {
            showcard = true;
          }
        });

        cardparent.style.display = "block";

        if (showcard) {
          card.classList.remove("d-none");
          card.classList.add("show", "fade");
          if (cardparent) {
            cardparent.classList.add("col");
          }
        } else {
          card.classList.remove("show");
          card.classList.add("fade");
          if (cardparent) {
            //cardparent.classList.remove("col");
            cardparent.style.display = "none";
          }
        }
      });
    });
  }
</script>