<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comandos de Condição</title>
</head>
<body>
    <?php
    $datetime = new DateTime("now", new DateTimeZone("America/Sao_Paulo"));
    $hora = $datetime->format('H');
    if ($hora >= 0 and $hora <= 12)
    {
        print "<h1>Bom dia!</h1>";
        echo '<img src="img/bomdia.jpg" alt="imagem de exemplo">';
    }
        
    elseif ($hora > 12 && $hora < 18)
    {
        print "<h1>Boa tarde!</h1>";
        echo '<img src="img/boa-tarde.jpg" alt="imagem de exemplo">';
    }
        
    elseif ($hora >= 18 && $hora < 24)
    {
        print "<h1>Boa noite!</h1>";
        echo '<img src="img/boa-noite.jpg" alt="imagem de exemplo">';
    }
    ?>

</body>
</html>