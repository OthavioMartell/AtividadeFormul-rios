<!DOCTYPE html>

<html lang="pt-br"> 

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Exercício 4</title>
    </head>

    <body>

        <?php
            $n1 = (float) $_GET['number#1'];
            $n2 = (float) $_GET['number#2'];
                if ($_GET['operation'] == "multiplication"){
                    $r = $n1 * $n2;
                }elseif ($_GET['operation'] == "division"){
                    $r = $n1 / $n2;
                }elseif ($_GET['operation'] == "more"){
                    $r = $n1 + $n2;
                }elseif ($_GET['operation'] == "less"){
                    $r = $n1 - $n2;
                }
        ?>

        <div id="secondary-content">

            <div class="secondary-content-title">

                <h1>Resultado</h1>
                
            </div>

            <div class="operation-answer">
                <p><?php print "$r" ?></p>
            </div>

            <div id="back-button-box">
                <a href="4Index.php">Realizar outro cálculo!</a>
            </div>

        </div>
    </body>
</html>