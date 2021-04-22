<?php

// Class Creation
class Calculatrice{
    private $x ;
    private $y ;
    private $operation ;

    function __construct($x,$y,$operation) {
        $this->x = $x;
        $this->y = $y;
        $this->operation = $operation;
      }
      function Calculer(){
          $solution = null ;
          switch ($this->operation) {
            case '+':
                $solution = $this->x + $this->y ;
                break;
            case '-':
                $solution = $this->x - $this->y ;
                break;
              default:
                  break;
          }
          return $solution ; 
      }
}

//Initialisation
$x = null ;
$y = null ;
$operation = null ;
$solution = null ;
$afficheur = "" ;


if(isset($_POST['x'])) $x = $_POST['x'];
if(isset($_POST['y'])) $x = $_POST['y'];
if(isset($_POST['operation'])) $x = $_POST['operation'];


//Ajouter La Valeur

if (isset($_POST['Number'])) {
    $Number = $_POST['Number'] ;
    if($operation == null){
        if($x == null) $x = $Number ;
        else $x = floatval($x . $Number);
    }else {
        if($y == null) $y = $Number ;
        else $y = floatval($y . $Number);
    } 
}
//Calcule
if(isset($_POST['Egale'])){
    $Egale = $_POST['Egale'] ;
    $Calculatrice = new Calculatrice($x, $y, $operation);
    $solution = $Calculatrice->Calculer($x, $y, $operation) ;
}

//Afficher
if($solution != null)
    $afficheur = $solution ;
else {
    if($x != null ) $afficheur .= $x ;
    if($operation != null ) $afficheur .= "" . $operation ."" ;
    if($y != null ) $afficheur .= $y ;
}
?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculatrice</title>
</head>
<body>
<form action="" method="POST">
<input type="text" name="x" value="<?php echo $x ?> 1">
<input type="text" name="y" value="<?php echo $y ?>2">
<input type="text" name="operation" value="<?php echo $operation ?>">
<br><br>

<input type="text" name="afficheur" id="">
<br><br>

<input type="submit" name="Number" value="1" id="">
<input type="submit" name="Number" value="2" id="">
<input type="submit" name="operation" value="+" id="">
<input type="submit" name="operation" value="-" id="">
<br><br>

<input type="submit" name="Egale" value="Calculer" id="">
</form>
</body>
</html>