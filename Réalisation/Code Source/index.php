<?php

class Calculatrice{
    private $x;
    private $y;
    private $operation;

    function __construct($a,$b,$operation) {
        $this->x = $a;
        $this->y = $b;
        $this->operation = $operation;
    }
 
    function Calculer(){
        $solution = null;
        switch($this->operation){
            case "+" : 
                $solution = $this->x + $this->y;
                break;
            case "-" : 
                $solution = $this->x - $this->y;
                break;
            case "x" : 
                $solution = $this->x * $this->y;
                break;
            case "/" : 
                $solution = $this->x / $this->y;
                break;
            case "%" : 
                    $solution = $this->x % $this->y;
                break;
        }
        return $solution;
    } 

}
   

    // Initialisation des variables
    $x = null;
    $y = null;
    $operation = null;
    $afficheur = "";
    $solution = null;

    // Traitement

    // Récupération des variables de la page
    if(isset($_POST['x'])) $x = $_POST['x'];
    if(isset($_POST['y']))$y = $_POST['y'];
    if(isset($_POST['operation'])) $operation = $_POST['operation'];

    // Ajouter la valeur du Number au X ou Y
    if(isset($_POST['Number'])){
        $Number = $_POST['Number'];
        if($operation == null){
            if($x == null) $x = $Number;
            else $x = floatval($x . $Number);
        }else{
            if($y == null) $y = $Number;
            else $y = floatval($y . $Number);
        }
    }

    if(isset($_POST['Egale'])){
        $Egale = $_POST['Egale'];
        $calculatrice = new Calculatrice($x,$y,$operation);
        $solution = $calculatrice->Calculer($x,$y,$operation);
      
    }
    // Affichage 
    if($solution != null) $afficheur = $solution;
    else{
        if($x != null) $afficheur = $afficheur . "$x" ;
        if($operation != null) $afficheur .= " " .  $operation . " ";
        if($y != null) $afficheur .= $y;
    }
if(isset($_POST['Init'])){
    $x = null;
    $y = null;
    $operation = null;
    $afficheur = "";
    $solution = null;
}
?>
<!doctype html>
<html lang="en">
  <head>
  <link rel="icon" type="image/png" sizes="32x32" href="images/favicon.png">

    <title>Calculator</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"
    />
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <div class="main">
    <form action="" method="post">
    <div class="heading ">
                <i id="operator" class="fas fa-bars"></i>
                <span >Calculator</span>
                <i id="operator"  class="fas fa-moon"></i>
            </div>
    <div class="result">
    <input  type="hidden" name="x" value="<?php echo $x ?>">
    <input  type="hidden" name="y" value="<?php echo $y ?>">
    <input  type="hidden" name="operation" value="<?php echo $operation ?>">

    <input class="" type="text" id="afficheur" name="afficheur" value="<?php echo $afficheur ?>" readonly/>
              </div>
    <div id="keyboard">
        <div class="group">
            <div class="top-section">

                <input id="operator" type="submit" name="Init" value="AC"  ></input>
                <input id="operator" type="submit" name="operation" value="%"></input>
                <input id="operator" type="submit" name="operation" value="/"></input>
            </div>
            <div class="middle-section">
  
            <input  type="submit" name="Number" value="7"  ></input>
            <input  type="submit" name="Number" value="8"  ></input>
            <input  type="submit" name="Number" value="9"  ></input>

           <input  type="submit" name="Number" value="4"  ></input>
           <input  type="submit" name="Number" value="5"  ></input>
           <input  type="submit" name="Number" value="6"  ></input>

           <input  type="submit" name="Number" value="1"  ></input>
           <input  type="submit" name="Number" value="2"  ></input>
           <input  type="submit" name="Number" value="3"  ></input>

           <input  type="submit" name="Number" value="0"  ></input>
           <input  type="submit" name="Number" value="00"  ></input>
           <input  type="submit" name="Number" value="."  ></input>
           </div>
        </div>

        <div class="side-section">

            <input id="operator" type="submit" name="operation" value="x"  ></input>
            <input id="operator" type="submit" name="operation" value="+"  ></input>
            <input id="operator" type="submit" name="operation" value="-"  ></input>
            <input id="operator" type="submit" name="Egale"     value="="  class="equal"></input> 
        </div>
</form>
</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>