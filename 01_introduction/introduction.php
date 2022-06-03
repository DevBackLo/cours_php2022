<!doctype html>
<html lang="fr">
  <head>
    
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- font google -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Bad+Script&display=swap" rel="stylesheet">

    <title>Cours_php2022 - Introduction</title>
                    <!--Mes styles  -->
    <link rel="stylesheet" href="../css/style.css">

  </head>
  <body class="bg-dark text-light">
      <div class="jumbotron bg-dark text-white text-center">
          <h1 class="display-3">Cours_php2022</h1>
            <p class="lead">PHP signifie aujoud'hui Hypertext Preprocessor</p>
</div>

<div class="row">
    <?php
        require('../inc/sidenav.inc.php'); // Ici on appelle le fichier sidenav.inc.php
    ?>
    <!-- ================================================================================ -->
    <!-- Contenu principal -->
    <!-- ================================================================================ -->
    <div class="col-sm-8">
        <main class="container-fluid">
            <div class="row">
                <hr>
                <h2 class="col-sm-12 text-center"><u>1-introduction</u></h2>
                 <!-- Ouverture de la div -->
                <div class="col-sm-12 col-lg-4">
                    <p>Pour parvenir à la réalisation de sites dynamiques, nous allons aborder successivement les points suivants:</p>
                    <ul>
                        <li>De connaître la syntaxe et les caractéristiques du langage PHP</li>
                        <li>Les notions essentielles du langage SQL permettant la création et la notion d'une BBD et la réalisation des requêtes de base</li>
                        <li>Le fonctionnement et la réalisation de BBD MYSQL et les moyens d'y accéder à l'aide de fonctions spécialisées de PHP(ou object)</li>
                    </ul>
                </div>
                <!-- Fermeture de la div -->

                <div class="col-sm-12 col-lg-4"></div>
                    <p>PHP permet en outre de créer des pages interactives. Une page interactive permet a un visiteur de saisir des données personnelles. Ces dernières sont ensuite transmise au serveur , ou elles peuvent rester stockées dans une base de données pour être diffusées vers d'autre utilisateurs. Un visiteur peut par exemple s'enregistrer et retrouver une page adaptée à ses besoins lors d'une visite ultèrieur. Il peut aussi envoyer des e-mails et des fichiers sans avoir à passer par son logiciel de messagerie. En associant toute ces caracteristiques il est possible de créer aussi bien des sites de diffusion et de collectes d'informations que des sites d'e-commerces, de rencontre ou des blogs.</p>
            </div>
            <!-- Fin de la div -->
            <div class="col-sm-12 col-lg-4">
                <p>Pour contenir la masse d'informations collectées, PHP s'appuie généralement sur une base de données , généralement MYSQL mais aussi SQLite, et sur des serveurs Apache, PHP, MYSQL et Apache forment d'ailleur le trio ultra dominant sur les serveurs internets. Quand ce trio et associé sur un serveur à LINUX, on parle de système LAMP (Linux,Apache,Mysql et PHP). PHP est utilisé aujourd'hui par plus des 3/4 quarts des sites dynamiques sur la planète et par les 3/4 quarts des grandes entreprises françaises.
                Pour un serveur Window, on parle de système WAMP, mais ceci est beaucoup moins courant.
                </p>
            </div>
            <!-- Fin de la main -->
</main>
        <!-- Fin de la row -->
        <div class="row">
        <div class="col-sm-12 col-md-6">
            <p>Avec le code suivant s'écris dans un fichier nommé info.php, placé dans le serveur d'évaluation on obtient toutes les infos sur le PHP éxécuté dans ce serveur.   </p><br>
      
            <code><?php 
                    phpinfo(); 
                    ?>
            </code>
            <div class="alert alert-success">
                <?php 
                echo "<p>Bienvenue sur le site de cours de PHP7</p>";
                ?>
                <?php
                echo "<p>Aujourd'hui nous sommes le " .date("d/m/Y")."</p>";
                ?>
            </div>
        </div>
        <!-- Fin de la div -->
        <div class="col-sm-12 col-md-6">
            <h3>Le cycle de vie d'une page PHP</h3>
            <ul>
                <li>Envoi d'une requête HTML par le navigateur client vers le serveur du type 
                    https//www.monserveur.fr.page.php
                </li>
                <li>Interprétation par le serveur du code PHP contenu dans la page appelée.</li>
                <li>Envoi par le serveur d'un fichier dont le contenu est purement du html.</li>
            </ul>
            <a href="info.php" class="btn btn-primary btn-lg" role="button">Voir info.php.</a>
        </div>
        </div>
        <!-- Fin de la row -->
        <hr>
        <div class="row">
            <div class="col-sm-12">
                <h2 class="text-center">2-Inclure des fichiers externes</h2>
                <table class="table table-striped" id="tableau-1">
                    <thead>
                        <tr>
                            <th scope="col"> Fonction</th>
                            <th scope="col">Description</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>include("nom-fichier.php)</td>
                            <td>Lors de son interpretation par le serveur, cette ligne est remplacée par tout le contenu du fichier précisé en paramètre, dont vous fournissez le nom et éventuellement l'adresse complète. En cas d'erreur, par exemple si le fichier n'est pas trouvé, include() ne génère qu'une alerte (un warning), et le script continue.</td>
                        </tr>
                        <tr>
                            <td>require("nom-fichier.php")</td>
                            <td>A desormais un comportement identique a include(), a la différence près qu'en cas d'erreur , require() provoque une erreur fatale et met fin au script</td>
                        </tr>
                        <tr>
                            <td> include_once("nom-fichier.php")</td>
                            <td>Contrairement aux deux précédentes, ces fonctions ne sont pas éxécutées plusieurs fois , même si elles figurent dans une boucle ou si elles sont déjà éxécutées une fois dans le code qui précède</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- Fin de la div -->
        <br>
        <br>
        

    </div>
    <!-- Fin de la partie principale, col-8 -->
    <div class="col-sm-2 aside">



    </div>
    <!-- Fin de la col-2- -->






</div>

<?php
        require('../inc/footer.inc.php'); // Ici on appelle le fichier footer.inc.php
    ?>
      
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

    <!-- mon script js pour la navigation -->
    <script src="../inc/sidenav.js"></script>
  </body>
</html>