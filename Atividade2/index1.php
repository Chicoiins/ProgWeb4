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
    if (H >= 0 && H <= 12)
    {
        print "<h1>Bom dia!</h1>";
        echo '<img src="https://media-cdn.tripadvisor.com/media/photo-s/10/b1/37/87/o-lindo-nascer-do-sol.jpg" alt="imagem de exemplo">';
    }
        
    elseif (H > 12 && H < 18)
    {
        print "<h1>Boa tarde!</h1>";
        echo '<img src="https://images.pexels.com/photos/66997/pexels-photo-66997.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="imagem de exemplo">';
    }
        
    elseif (H >= 18 && H < 24)
    {
        print "<h1>Boa noite!</h1>";
        echo '<img src="https://marcellocavalcanti.com.br/wp-content/uploads/2018/07/mc-504.jpg" alt="imagem de exemplo">';
    }
    ?>

</body>
</html>