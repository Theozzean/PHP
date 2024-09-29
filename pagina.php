<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina</title>
</head>
<body>
    <h1>Minha primeira página com php!</h1>

    <?php
       echo "minha sting vinda do php";
    ?>

    <p>Estou no curso <?php echo "php";?></p>
    <p>10 mais 10 é igual a <?php echo 10 + 10; ?> </p>
    <?php 
      echo "minha linha 1 <br>";
      echo "minha linha 2 <br>";
      echo "minha linha 3 <br>";  
    ?>
    <?= "php" ?> <!-- São códigos para colocar o PHP mais fácil dentro do HTML -->

</body>
</html>