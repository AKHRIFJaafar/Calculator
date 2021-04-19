<!doctype html>
<html lang="en">
  <head>
    <title>Calculatrice</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="/js/custom.js"></script>
  </head>
<body>
  <form class="container mt-5" action="traitement.php" method="POST">
    <input type="text" id="afficheur"><br><br>
    <input onclick="ClickNumber(1)" name="number1">1</input>
    <input onclick="ClickNumber(2)" name="number2">2</input>
    <input onclick="ClickNumber(3)" name="number3">3</input>
    <input onclick="Operation('+')" name="number">+</input>
    <input onclick="Operation('-')" name="number1">-</input>
    <input onclick="Operation('*')" name="number1">x</input>

    <input onclick="Egale()">=</input>
    <input onclick="Init()">C</input>
  </form>