<?php 
function Calculer($x,$y,$operation){
    $solution = null ;
    switch ($operation) {
        case '+':
            $solution = $x + $y ;
            break;
        case '+':
            $solution = $x - $y ;
            break;
        default:
            break;
    }
    return $solution; 
}
if(isset($_POST['Init'])){
    $x = null ;
    $y = null ;
    $operation = null ;
    $solution = null ;
    $afficheur = "" ;
}

 // Traitement
 if(isset($_POST['x'])) $x = $_POST['x'];
 if(isset($_POST['y'])) $y = $_POST['y'];
 if(isset($_POST['operation'])) $operation = $_POST['operation'];
// Ajouter la valeur du nombre au X ou Y
if(isset($_POST['Number']))




?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculatrice</title>
</head>
<body>
<form action="" method="">
<input type="text" name="x" value="<?php echo $x ?>"  ></input>
<input type="text" name="y" value="<?php echo $y ?>"  ></input>
<input type="text" name="operation" value="<?php echo $operation ?>" ></input>
<input type="text" name="afficheur" value="<?php echo $afficheur ?>"  ></input>
<input type="text" name="Init" value="C" ></input>
</form>
    
</body>
</html>