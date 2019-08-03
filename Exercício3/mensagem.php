<!DOCTYPE html>

<html lang="pt-br"> 

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Exercício 3</title>
    </head>

    <body>

        <div id="secondary-content">

            <div class="secondary-content-title">

                <h1>Obrigado pela sua seleção, <span> <?php echo $_POST['name'] ?> </span></h1>

            </div>

            <p class="external-p">Pelo que foi selecionado, você gosta de <?php echo $_POST['meal'] ?>. Principalmente se tiver Vinho <?php echo $_POST['wine'] ?> como bebida.</p>

            <p id="exit-link-p"><a href="3Index.php" id="exit-link">Voltar</a></p>

        </div>
    </body>
</html>