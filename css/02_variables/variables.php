<!doctype html>
<html lang="fr">

<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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
                    <h2 class="col-sm-12 text-center" id="definition"><u>1-Définition</u></h2>
                    <div class="col-sm-12 col-lg-4">
                        <p>Chaque variables possedent un identifiant particulier, qui commencent toujours par le caractère'$' suivis du nom de la variable. Les rêgles de céation des nom de variables sont les suivantes :</p>
                        <ul>
                            <li>Le nom commence par un caractère alphabètique, pris dans les ensembles de [a-z],
                                [A-Z] ou par le tiret bas'_' </li>
                            <li>Les caractères suivants peuvent être les mêmes plus des chiffres.</li>
                            <li>Les fonctions n'ont pas les mêmes attentes, par exemple: <code> __File__</code>
                                Qui permet d'afficher le chemin complet:
                                <?php
                                echo "nom du fichier inclus:" . __File__;
                                ?> </li>
                            <li>La longueur du nom n'est pas limité mais il convient d'être raisonnable sous peine de confusion dans la saisie du code. Il est conseillé de créer des noms de variable le plus 'parlant' possible en réalisant le code contenant la variable
                                <code>$nomClient</code>, par exemple, vous comprenez d'avantâge ce que vous manipulez que si vous aviez écrit <code>$x</code> ou <code>$y</code>.
                            </li>

                        </ul>
                    </div>
                    <div class="col-sm-12 col-lg-4">
                        <h5>a. Les noms de variables suivants sont corrects</h5>
                        <ul>
                            <li>$mavar</li>
                            <li>$_mavar</li>
                            <li>$mavar2</li>
                            <li>$M1</li>
                            <li>$_123</li>
                        </ul>
                        <h5>b. Les noms de variables suivants sont illégaux</h5>
                        <ul>
                            <li>$*mavar</li>
                            <li>$5_mavar</li>
                            <li>$mavar2+</li>

                        </ul>

                    </div>
                </div><!-- fin de la rangée-->

                <hr>

                <div class="row">
                    <h2 class="col-sm-12 text-center" id="affectation"><u>2- Affectation de variables</u></h2>
                    <div class="col-sm-12">
                        <p>L'affectation consiste à donner une valeur a une variable. Lors de la création de variable, vous ne déclarez pas son type.C'est la valeur que vous lui affectez qui détermine ce type. Dans PHP, vous pouvez affecter une variable par valeur ou par référence.</p>
                        <ul>
                            <li>$mavar=75</li>
                            <li>$mavar="Paris";</li>
                            <li>$mavar=7*3+2/5-91%7; //PHP évalue l'expression puis affecte le résultat</li>
                            <li>$mavar=mysql_connect($a,$b,$b); //la fonction retourne une ressource.</li>
                            <li>$marvar=isset($var&&($var==9)); //La fonction retourne une valeur booléenne</li>
                        </ul>
                    </div><!-- Fin de la collonne-->
                </div><!-- Fin de la rangée (row)-->

                <hr>

                <div class="row">
                    <h2 class="text-center col-sm-12" id="variablesPredefinies"><u>3- Les variables prédéfinies</u></h2>
                    <div class="col-sm-12">
                        <p>Le php dispose d'un grand nombre de variables prédefinies qui contiennent des informations à la fois sur le serveur, comme les valeurs saisies dans un formulaire, les cookies ou les sessions.</p>

                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">Variables</th>
                                    <th scope="col">Utilisation</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">$GLOBALS</th>
                                    <td>contient le nom et la valeur de toutes les variables globales du script.
                                        Les noms des variables sont les clefs de ce tableau. <code>$GLOBALS["mavar"]</code> récupère la valeur de la variable $mavar en dehors de sa zone de visibilitée (dans les fonctions par exemple)</td>
                                </tr>

                                <tr>
                                    <th scope="row">$COOKIE</th>
                                    <td>contient le nom et la valeur des cookies enregistrer sur le poste client.
                                        Les noms des cookies sont les clefs de ce tableau</td>
                                </tr>

                                <tr>
                                    <th scope="row">$_ENV</th>
                                    <td>Contient le nom et la valeur des variables d'environnements qui sont changeantes selon les serveurs</td>
                                </tr>

                                <tr>
                                    <th scope="row">$_FILES</th>
                                    <td>Contient le nom des fichiers télechargés à partir du poste client.</td>
                                </tr>

                                <tr>
                                    <th scope="row">$_GET</th>
                                    <td>Contient le nom et la valeur des données issues d'un formulaire envoyé.
                                        par la méthode GET. Les noms des champs des formulaires sont les clefs dans ce tableau</td>
                                </tr>

                                <tr>
                                    <th scope="row">$_POST</th>
                                    <td>Contient le nom et la valeur des données issues d'un formulaire envoyé.
                                        par la méthode POST. Les noms des champs des formulaires sont les clefs dans ce tableau</td>
                                </tr>

                                <tr>
                                    <th scope="row">$_REQUEST</th>
                                    <td>Contient l'ensemble des variables superglobales : $_GET, $_POST,
                                        $_COOKIE et $_FILES </td>
                                </tr>

                                <tr>
                                    <th scope="row">$_SERVER</th>
                                    <td>Contient les informations liées au serveur web, tel que le contenu des en-têtes HTTP ou le nom du script en cour d'execution. retenons les tables suivantes:
                                        <ul>
                                            <li><code>$_SERVER{"HTTP_ACCESS_LANGAGE"]</code>, qui contient le code de langue du navigateur client</li>
                                            <li><code>$_SERVER{"HTTP_COOKIE"]</code>, qui contient le nom et la valeur des cookies lue sur le poste client</li>
                                            <li><code>$_SERVER{"HTTP_HOST"]</code>, qui donne le nom de domaine</li>
                                            <li><code>$_SERVER{"PHP_SELF"]</code>, qui contient le nom du script en cour. Nous l'utilisiserons souvent dans les formulaires</li>
                                            <li><code>$_SERVER{"SERVER_ADDR"]</code>, qui indique l'adresse IP du serveur.</li>
                                            <li><code>$_SERVER{"QUERY_STRING"]</code>, qui contient la chaîne de requête utilisée pour accéder au script</li>

                                        </ul>
                                    </td>
                                </tr>

                                <tr>
                                    <th scope="row">$_SESSION</th>
                                    <td>Contient l'ensemble des noms des variables de session et leur valeurs.</td>
                                </tr>

                            </tbody>

                        </table>
                    </div>
                    <!--Fin de la colonne-->
                </div>

                <hr>

                <div class="row">
                    <div class="col-sm-12 px-4">
                        <h2="text-center"><u>4-Les opérateurs d'affectation combinés</u></h2>
                            <p>En plus de l'opérateur classique d'affectation = ,il existe plusieurs operateurs d'affectations combiner. ces opérateur realise à la fois une opération entre deux opérandes et l'affectation du resultat à l'opérande de gauche</p>
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">Opérateur</th>
                                        <th scope="col">Description</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">+=</th>
                                        <th>Addition puis affectation :<br>
                                            $x += $y équivaut à $x = $x + $y <br>
                                            $y peut être une expression complexe dont la valeur est un nombre.</th>
                                    </tr>

                                    <tr>
                                        <th scope="row">-=</th>
                                        <th>Soustraction puis affectation :<br>
                                            $x -= $y équivaut à $x = $x - $y <br>
                                            $y peut être une expression complexe dont la valeur est un nombre.</th>
                                    </tr>

                                    <tr>
                                        <th scope="row">*=</th>
                                        <th>Multiplication puis affectation :<br>
                                            $x *= $y équivaut à $x = $x * $y <br>
                                            $y peut être une expression complexe dont la valeur est un nombre.</th>
                                    </tr>

                                    <tr>
                                        <th scope="row">**=</th>
                                        <th>Puissance puis affectation :<br>
                                            $x**=2 équivaut à $x=($x²).</th>
                                    </tr>

                                    <tr>
                                        <th scope="row">*=</th>
                                        <th>Division puis affectation :<br>
                                            $x /= $y équivaut à $x = $x * $y <br>
                                            $y peut être une expression complexe dont la valeur est un nombre différent de zero.</th>
                                    </tr>

                                    <tr>
                                        <th scope="row">%=</th>
                                        <th>Modulo puis affectation :<br>
                                            $x %= $y équivaut à $x = $x % $y $y <br>
                                            $y peut être une expression complexe dont la valeur est un nombre.</th>
                                    </tr>

                                    <tr>
                                        <th scope="row">.=</th>
                                        <th>Concaténation puis affectation :<br>
                                            $x .= $y équivaut à $x = $x . $y <br>
                                            $y peut être une expression littérale dont la valeur est une chaîne de caractère.</th>
                                    </tr>
                                </tbody>
                            </table>

                    </div><!-- Fin de la colonne-->


                </div><!-- fin de la rangée row-->
                <hr>

                <div class="row">
                    <div class="col-sm-12 px-4">
                        <h2 class="text-center"><u>5-Les constantes</u></h2>
                        <p>Vous serez parfois amenés a utiliser de manière répetitive des informations devant rester consantes dans toutes les page d'un même site. Il peut s'agir de texte où de nombres qui reviennent souvent. Pour ne pas risquer l'écrasement accidentel de ces valeurs , qui pourraient produire si elles étaient contenues dans des variables, vous avez tout interêt à les enregistrer sous forme de constantes personnalisées.</p>
                        <p>On peut définir ses constantes sois-même cf. ; pour définir des constantes personnalisées, utilisez la fonction define(), dont la syntaxe est la suivante :
                            <strong>boolean define(string nom_cte,divers valeur_cte boolean casse)</strong>
                            voir la page <a href="../00_page/03-page.php" target="blank">suivante</a>
                        </p>
                    </div><!--Fin de la colonne-->
                </div>
            </main>
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