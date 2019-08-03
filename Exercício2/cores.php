    
<!DOCTYPE html>

<html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Exercício 2</title>
    </head>

    <body>

        <div id="main-content">

            <div class="main-content-title">

                <h1>Seletor de Cores Interativo</h1>

            </div>

            <div class="colors-code">
                <p id="RP"><b>R:</b> <?php echo $_GET['R_color'] ?></p>
                <p><b>G:</b> <?php echo $_GET['G_color'] ?></p>
                <p><b>B:</b> <?php echo $_GET['B_color'] ?></p>
            </div>

            <?php 
                $R= $_GET['R_color'];
                $G= $_GET['G_color'];
                $B= $_GET['B_color'];
                $RGB= $R . ',' . $G . ',' . $B;
            ?>

            <div class="colors-box" style="width: 150px; height: 160px;margin: 10px 0 0 0; background-color: rgb(<?php echo $RGB ?>); box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.2); float: right;"></div>

        </div>
    </body>
</html>