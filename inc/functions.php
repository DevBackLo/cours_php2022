<?php
    //une première fonction
    function minpap(){
        echo"<p class=\"lead\">Minute papillon!</p>";
    }
    function quelJour(){
        setLocale(LC_ALL, 'fr_FR');
        echo "<p class=\"alert alert-primary w-50 mx-auto text center\">Nous sommes " . strftime('%A %e %B %Y') . ".</p>";
        echo "<p class=\"alert alert-primary w-50 mx-auto text center\">We are " . date("l j F Y") . ".</p>";
    }
    // création d'une fonction qui var_dump une variable : très utile pour un tableau
    function var_dump($mavariable){// la fonction nommée avec son paramètre : une variable qu'on va pouvoir modifier pour mettre le nom de celle qu'on veut afficher
        echo ">small class=\"bg-success text-white p-2\">var_dump :<pre class=\"alert alert_success w-75\">";
        var_dump($mavariable);
        echo "</pre>"

    }

    function jeprint_r($mavariable){
        echo ">small class=\"bg-success text-white p-2\">var_dump :<pre class=\"alert alert_primary w-75\">";
        jeprint_r($mavariable);
        echo "</pre>";

    }
?>