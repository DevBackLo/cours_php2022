<?php
require_once('../inc/functions.php');
?>
<!doctype html>
<html lang="fr">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <!-- font google -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Bad+Script&display=swap" rel="stylesheet">

    <title>Cours PHP7 - PDO - 1</title>

    <!-- mes styles -->
    <link rel="stylesheet" href="../css/style.css">
</head>

<body class="bg-dark">
    <!-- JUMBOTRON -->
    <div class="jumbotron bg-dark text-white text-center">
        <h1 class="display-3">Cours PHP7 - PDO</h1>
        <p class="lead">La variable "$pdo" est un object qui représente la connexion a une BDD</p>


    </div>

    <!-- RANGÉE PRINCIPALE -->
    <div class="row">
        <!-- LA NAVIGATION EN INCLUDE (penser à ajouter le JS qui va avec en fin de page) -->
        <?php
        require('../inc/sidenav.inc.php')
        ?>

        <!-- ============================================================== -->
        <!-- Contenu principal -->
        <!-- ============================================================== -->
        <div class="col-sm-8">
            <main class="container-fluid">


                <div class="row">
                    <hr>

                    <h2 class="col-sm-12 text-center" id="definition">I. Connexion à la BDD</h2>
                    <div class="col-sm-12">
                        <p><abbr title="PHP Data Object"></abbr> est l'accronyme de PHP Data Object</p>

                        <?php
                        $pdoENT = new PDO(
                            'mysql:host=localhost;=dbname=entreprise', //On a en premier lieu le driver mysql(IBM,ORACLE,ODBC...) Le nom du serveur, le nom de la BDD
                            'root', // l'utilisateur pour la BDD
                            '', //Si vous êtes sur Mac il ya a un mdp ='root'
                            array(
                                PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING, /// Cette ligne sert a afficher les erreurs sql dans le navigateur
                                PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
                                //Pour définir le charset échanges avec la BDD
                            )
                        );

                        // jevar_dump($pdoENT); //L'object est vide car il n'y a pas de propriétés.
                        // jevar_dump(get-class_method($pdoENT)); // permet d'afficher la liste des méthodes présentes dans l'object PDO
                        ?>
                    </div> <!-- Fin de la col -->

                    <div class="col-sm-12">
                        <h2 class="text-center"><span>2-</span>Faire des requêtes avec <code>exec()</code></h2>
                        <p>la méthode exec() ext utilisée pour faire des requêtes qui ne retournent pas de résultat : INSERT, UPDATE, DELETE</p>
                        <p>valeur de retour : <br>
                    Success : dans le jevar_dump de $requêtes on aura le nombre de lignes affectés par la requêtes , 3 delete = int(3) <br>
                    echec : false = 0
                        </p>
                        <?php
                        // "INSERT INTO employes (prenom, nom, sexe, service,
                        //    date_embauche, salaire) VALUES
                        //    ('jean', 'Bernard', 'm', 'informatique', '2021-03-18',
                        //    2000)";
                        
                        // $requête = $pdoENT->exec( "INSERT INTO employes (prenom,
                        // nom, sexe, service, date_embauche, salaire) VALUES
                        // ('Cathy', 'Kane','f', 'compatibilite',
                        // '2021-03-23',.3000)"); // On la commente pour ne pas inserer cette requête à chaque fois que l'on rafraîchis la page

                        echo "<p>Dernier id généré en BDD :"
                            . $pdoENT->lastInsertId(). "
                            .</p>";
                            $requête = $pdoENT->exec( "DELETE FROM employes
                            WHERE prenom ='jean' AND nom='Bernard'" );

                        ?>
                    </div> <!-- Fin de la col-->
                    <div class="col-sm-12">
                        <hr>
                        <hr>
                        <br>
                        
                        <h2 class="text-center"><span>3-</span>Faire des requêtes avec <code>query()</code></h2> 
                        <p>est utilisée pour faire des requêtes qui retournent un ou plusieurs résultats : SELECT mais aussi DELETE UPDATE et INSERT</p>
                        <p>En cas de succès : query() retourne un nouvel object qui provient de la classe PDO :FETCH_NUM : pour obtenir un tableau aux indices numériques</p>



                        <ul>
                            <li> Pour information, on peut mettre les paramètres () de fetch()</li>
                            <li>PDO ::FETCH_NUM : pour obtenir un tableau aux indices numériques</li>
                            <li>PDO ::FETCH_OBJ : pour obtenir un dernier object</li>
                            <li>Ou encore des ()vides; pour obtenir un mélange de tableau associatif et numérique</li>
                            
                        </ul>

                        <?php
                        //On demande des informations à la BBD car il y a un ou plusieurs résultats avec query()
                        $requête = $pdoENT->query("SELECT * FROM EMPLOYES
                        WHERE prenom = 'Emilie' " );
                        //jevar_dump($requete);

                        //2- dans cet object $requête, nous ne voyons pas encore les données concernant Emilie pourtant elles s'y trouvent. Pour y acceder, nous devons utiliser une méthode de requête qui s'appelle fetch()

                        $ligne = $requete->fetALL(PDO::FETCH_ASSOC);
                        //3- avec cette méthode fecth on transforme l'object $requête
                        //4-Fetch(), avec le paramètre PDO::FETCH_ASSOC permet de transformer l'object de la requête $requête en un array associatif appelé ici $ligne :on y trouve en indice le nom des champs de la requête SQL 
                        jevar_dump($ligne);
                        echo "<ul><li>Id : " .$ligne['id_employes'].
                        "<li>Prénom :" .$ligne['prénom']. "</li><li>Nom :" .
                        $ligne['nom']. "</li><li>Sexe :" .$ligne['sexe']. "</li><li>Service :" .$ligne['service']. "</li><li>Date d'entrée dans l'entreprise :" .$ligne['date_embauche']. "</li><li>Salaire :" $ligne['salaire']. " €</li></ul>";

                        //exo afficher le service de l'employé dont l'ID est 417 ainsi que son nom et son prenom

                        $requête = $pdoENT->query("SELECT service, prenom,nom FROM employes WHERE id_employes = '417' ");
                        $ligne = $requête->fetch( PDO::FETCH_ASSOC );
                        // jeprint_r($ligne);
                        echo "<ul><li>ID:" .$ligne['id_employes']. "</li><li>Service:" .$ligne['service']. "</li><li>Prénom :" .$ligne['prenom']. "</li><li>Nom" .$ligne['nom']. "</li>";
                        jeprint_r($ligne);
                        function jeprint_r($mavariable){
                            echo "<small class=\"bg-primary text-white p-2\">print_r :</small><pre class=\"alert alert-primary w-50\">";
                            print_r($mavariable);
                            echo "</pre>";
                        }
                           ?>
                    </div><!--Fin de col-->

                    <div class="col-sm-12">
                        <h2><span>4-</span> des requêtes avec query() et afficher plusieurs résultats</h2>

                        <?php
                            $requête = $pdoENT->query('SELECT * FROM employes ORDER BY prenom');
                            // // jevar_dump($requete); 
                            // $ligne = $requete->fetchAll(PDO::FETCH_ASSOC);
                            // jevar_dump($ligne);

                            $nbr_employes = $requete->rowCount(); //cette methode rowCount() permet de compter le nombre d'enregistrements retournés par la requête

                            //jevar_dump($nbr_employes);

                            echo"<p>Il y a " .$nbr_employes.
                            "employés dans notre BDD</p>";

                            //Comme nous avons plusieurs resultats dans $requete, nous devons faire une boucle pour les parcourir
                            //fetch() va chercher la ligne suivante du jeu de resultat à chaque tour de boucle et le transforme en objet. La boucle while permet de faire avancer le curseur dans l'object, Quand il arrive à la fin, fetch() retourne FALSE et la boucle s'arrête

                            echo "<ul>";
                            while($ligne = $requete->fetch(PDO::FECTH_ASSOC)){
                                echo "<li>".$ligne['prenom']."".$ligne['nom']."-".$ligne['sexe']."-".$ligne['service']."-".$ligne['date_embauche']."-".$ligne['salaire']. " €</li>";
                            }
                            echo "</ul>";

                            //Exo afficher la liste des différents services dans une ul en mettant un service par li

                            $requete = $pdoENT->query("SELECT DISTINCT (service) FROM employes ORDER BY service");
                            $nbr_service = $requete->rowCount();

                            echo"<div class=\"bg-info rounded w-50 text-white mt-4 mx-auto\">";
                            echo "<p class=\"p-2 text-while\">Il y a " .
                            $nbr_services. " services dans l'entreprise : </p>";
                            echo "</div>";

                            // <!-- EXO 1/ dans un h2, compter le nombre d'employés
                            // 2/ puis afficher toutes les informations des employés dans un tableau HTML triés par ordre alphabétique de nom
                        ?>
                    </div>




                </div><!-- fin de la rangée -->

                <hr>
                <br><br>

            </main>
        </div> <!-- FIN DE LA PARTIE PRINCIPALE COL-8 -->

        <div class="col-sm-2 aside">
            <ul>
                <!-- DES ANCRES POUR LE COURS ET LES EXOS -->
                <li><a href="#"></a></li>
                <li><a href="#"></a></li>
                <li><a href="#"></a></li>
                <li></li>
            </ul>
        </div>
    </div>

    <!-- LE FOOTER EN REQUIRE -->
    <?php
    require("../inc/footer.inc.php")
    ?>

    <!-- Optional JavaScript -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>

    <!-- le js pour la navigation  -->
    <script src="../inc/sidenav.js"></script>

</body>

</html>