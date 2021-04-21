<?php
// Variables
$x ;
$y ;
$operation;
$resultat ;

// Métier
if (isset($_POST['submit'])){
    $x = $_POST['x'] ;
    $y = $_POST['y'] ;
    $operation = $_POST['operation'] ;
    $resultat = "";

    switch ($operation) {
        case 'None':
           echo "Attention! Vous n'avez pas choisir l'operation!!";
            break;
        case 'Somme':
            $resultat = $x + $y;
                break;
        case 'Soustraction':
            $resultat = $x - $y;
                break;
        case 'Division':
            $resultat = $x / $y;
                break;   
        case 'Produit':
            $resultat = $x * $y;
                break;        
        default:
            break;
    }
       echo $resultat;
}



?>
