<?php 
include('protect.php');

 ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>painel</title>
</head>
<body>
    bem vindo ao painel, <?php echo $_session ['nome'];?>

    <p>
        <a href="logout.php">sair</a>

    </p>
</body>
</html>