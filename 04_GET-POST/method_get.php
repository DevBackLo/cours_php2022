<?php require_once('../inc/functions.php') ?>


<body class="bg-dark">
    <!-- JUMBOTRON -->
    <div class="jumbotron bg-secondary text-center">
        <h1 class="display-3 pt-3<p></p>">Cours_php2022 - La Mérthode GET</h1>
        <hr>
        <p class="lead">$_GET [] représente les données qui transitent par l'URL</p>

    
    <div class="row">
        
        <?php
        require('../inc/sidenav.inc.php'); // ici on appelle le fichier sidenav.inc.php   
        ?>
     <!-- ============================================================== -->
     <!-- Contenu principal -->
     <!-- ============================================================== -->
     <div class="col-sm-8">
         <main class="container-fluid">

        <div class="row">
            <hr>
            <h2 class="col-sm-12 text-center" id="conditions"><u>1- Les conditions avec if</u></h2>
            <div class="col-sm-12 col-md-4" id="if">
                <h3 class="text-center">1- If</h3>
                <p>L'instruction <code>if</code> est la plus simple et la plus utilisée des instructions conditionnelles présente dans tous les langages de programmation, elle est essentielle puisqu'elle permet d'orienter l'éxécution du script en fonction de la valeur booléenne d'une expression.</p>
                <?php
                    $a = 100;
                    $b = 55;
                    $c = 25;
                    $d = 8;

                    if ($a > $b && $b > $c){
                        echo "<p class='alert alert-success w-75 mx-auto text-center'>Les deux conditions sont respectées.</p>";
                    }
                ?>
            </div><!-- Fin de la colonne -->
            <div class="col-sm-12 col-md-4" id="ifElse">
                <h3 class="text-center">2- If...else</h3>
                <p>L'instruction <code>if...else</code> permet de traiter le cas où l'expression conditionnelle est TRUE et en même temps d'écrire un traitement de rechange quand elle est évaluée à FALSE, ce qui ne permet pas une instruction <code>if</code> seule. L'instruction ou le bloc qui suit <code>else</code> est le seul à être éxécuté. L'exécution continue alors ensuite normalement après le bloc.</p>
                <?php 
                    if ($a > $b){
                        echo "<p class=\"alert alert-success w-75 mx-auto text-center\">$a est supérieur à $b.</p>";
                    }else{
                        echo "<p class=\"alert alert-success w-75 mx-auto text-center\">$b est supérieur à $a</p>";
                    }
                ?>
                <p>Le bloc qui suit les instructions <code>if</code> ou <code>else</code> peut contenir toutes sortes d'instructions, y compris d'autres instructions <code>if...else</code>. Nous obtenons, dans ce cas, une syntaxe plus complète. </p>
            </div>

            <div class="col-sm-12 col-md-4" id="ifElseIf">
                <h3 class="text-center">3- If...else if... else</h3>
                <p>Nous aurons ici une syntaxe un peu plus compliquée de la forme suivante: <code>if (condition){} else if(condition){}else{}</code></p>
                <p>Ici notre variable d est égale à 8. On teste différentes conditions pour voir laquelle est vrai grâce à un <code>if ... else if ... else</code>. Ici la première condition est vraie.</p>
                <?php
                    echo "<p class=\"alert alert-success w-75 mx-auto text-center\">";
                    if($d == 8){
                        echo "Réponse 1 : \$d = 8";
                    }elseif($d != 10){
                        echo "Réponse 2 : \$d est différent de 10";
                    }else{
                        echo "Réponse 3 : Les conditions précédentes sont fausses";
                    }
                    echo "</p>";
                ?>
                <?php
                    $e = 10;
                    $f = 5;
                    $g = 2;
                    echo "<p class=\"alert alert-success w-75 mx-auto text-center\">";
                    if($e == 9 || $f > $g){
                        echo "Au moins une des deux conditions est remplie.";
                    }else{
                        echo "Les deux conditions sont fausses.";
                    }
                    echo "</p>";
                ?>
            </div>
            <!-- Fin de la colonne -->
            <div class="col-sm-12 col-md-6">
                <h3 class="text-center" id="ternaire">4- La méthode ternaire</h3>
                <p>Il existe d'autres façons d'écrire un <code>if...else</code>: la méthode ternaire. Avec cette méthode le code sera le suivant: <code>(condition)? code à éxécuter si la condition retourne TRUE : code à retourner si le code renvoie FALSE;</code></p>
                <?php
                    $h = 10;
                    // En ternaire
                    echo ($h == 10)?"<p class='alert alert-danger w-75 mx-auto text-center'>\$h est égal à 10.</p>" : "<p class='alert alert-danger w-75 mx-auto text-center'>\$h est différent de 10.</p>";
                ?>
            </div><!-- Fin de la colonne -->
            <div class="col-sm-12 col-md-6">
                <h3 class="text-center" id="switch">5- La méthode switch et case</h3>
                <p>Switch permet de comparer à une multitude de valeurs, comme l'instruction <code>if... else if ... else</code>.</p> 
                <?php
                    echo "<p class=\"alert alert-success w-75 mx-auto text-center\">";
                    $dept = 91;
                    switch ($dept){
                        case 75 :echo "Paris";
                        break;
                        case 41 : echo "Loir-et-Cher";
                        break;
                        case 91 : echo "Essonne";
                        break;
                        default : echo "Département inconnu !!! Revoyez vos cours de géo ;p ";
                        break;
                    }
                    echo "</p>";
                ?>       
            </div>
            <!-- Fin de la colonne -->
            </div>
            <!-- Fin de la rangée (row) -->
            <hr>
            <div class="row">
                <div class="col-sm-12" id="while">
                    <h2 class="text-center"><u>2-Les boucles</u></h2>
                    <p>Les boucles permettent de répéter des opérations élémentaires un grand nombre de fois sans avoir à réecrire le même code</p>
                </div>
                <div class="col-sm-12 col-md-6">
                    <h3 class="text-center">1- Boucle While</h3>
                    <p>La boucle <code>While</code> permet d'affiner le comportement d'une boucle en réalisant une action de manière répétitive tant qu'une condition est vérifiée ou qu'une expression quelconque est évaluée a true et donc de l'arrêter quand elle n'est plus vérifier,évaluer a FALSE.</p>
                    <div class="alert alert-success w-75 mx-auto text-center">
                        <?php
                        $n = 1;
                        while ($n%7 != 0){// Le script continue jusqu'a trouver un multiple de 7
                        $n = rand(1,100);// rand fais un tirage de nombres aléatoires compris entre 1 et 100 rand() pour random
                        echo $n . "&nbsp; - ";
                        }
                        ?>


                        <div class="col-sm-12 col-md-6">
                        <h3 class="text-center">1- Boucle do...While</h3>
                        <p>Avec l'instruction <code>Do...While</code> La condition n'est évaluer qu'après une première execution des instructions du bloc compris entre do et while</p>

                        <div class="alert alert-success w-75 mx-auto text-center">
                            <?php
                            $n2 = 1;
                            do {
                            $n2 = rand(1,100);// Ici on cherche un nombre aleatoire sans savoir la condition
                            echo $n2 . "&nbsp; * ";
                            } while ($n2%7 !=0); // Le scipt s'arrete lorsque l'on a multiple de 7
                            ?>


                        <div class="col-sm-12 col-md-6">
                        <h3 class="text-center">3- Boucle for</h3>
                        <p>La boucle<code>for</code> Est plus conscise, ramasée que la boucle <code>While</code>. Elle s'écrit ainsi : <code>For(initialisation; condition, incrémentation){code a  executer}</code></p>

                        <div class="alert alert-success w-75 mx-auto text-center">
                            <?php
                            //on va afficher les puissances de 2 jusqu'a 8
                            for ($i =0; $i <=8; $i++){
                                $tab[$i] = pow(2,$i);//à l'aide d'une boucle et de la fonction pow()
                            } // Creation d'un tableau avec 9 éléments
                            var_dump($tab);
                            
                            ?>



                    <div class="col-sm-12 col-md-6">
                        <h3 class="text-center">4- Boucle foreach</h3>
                        <p>La boucle<code>foreach</code>(pour chaque passage), est efficace pour afficher et lister les éléments contenues dans un tableau.</p>

                        <div class="alert alert-success w-75 mx-auto text-center">
                            <?php
                           $val = "Une valeur";
                           echo "Les puissances de deux sont: ";
                           foreach($tab as $val){
                               echo $val ."-";
                           }
                            
                            ?>
                        </div>
                    </div>
                    <div class="col-sm-12">
                            <p class="alert alert-danger w50 mx-auto text-center">Lecture des indices et des valeurs d'un tableau: <br> 
                        <?php
                        //Création d'un autre tableau avec la boucle for
                        for($i =0; $i <=8; $i++){
                            $tableau[$i] = pow(2,$i);
                        }
                            //Lecture des indices et des valeurs du tableau
                            foreach($tableau as $ind=>$valeur){
                                echo "2 puissance $ind vaut $valeur <br>";
                            }
                            echo "Le dernier indice est $ind et la dernière valeur est $valeur .";
                            ?>
                            </p>

                    </div><--! Fin de la collonne -->



            </div><--§ Fin de la rangée row-->
            <hr>
            <br><br>
        </main>
            
     </div><--!Fin de la partie principale col 8 -->

     <div class="col-sm-2 aside">
         <ul>
             <li><a href="#conditions">Les conditions</a>
                 <ul>
                     <li><a href="#if">If</a></li>
                     <li><a href="#ifElse">ifElse</a></li>
                     <li><a href="#ifElseIf">ifElseIf</a></li>
                     <li><a href="#ternaire"></a>ternaire</li>
                     <li><a href="#switch">switch</a></li>
                     
                 </ul>
             </li>
             <li><a href="#while">Les boucles</a></li>
         </ul>
     </div>
    </div>