<!DOCTYPE html>

<html lang="pt-br"> 

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Exercício 5</title>
    </head>

    <body>

        <div id="main-content">

            <div id="main-content-title">

                <h1>Conversão Textual</h1>
            </div>

            <div class="form1-box">
                <form action="p2.php" method="POST" id="form1">

                    <div class="textarea-box">
                        <textarea name="userText" id="textarea" placeholder="Digite aqui..." required></textarea>
                    </div>

                    <div class="radio-box">
                        <p>
                            <input type="radio" name="convertionType" value="invert" class="radioItems" id="invert" required>
                            <label for="invert">Inverter texto...</label>
                        </p>

                        <p>
                            <input type="radio" name="convertionType" value="bigLetters-all" class="radioItems" id="big-all" required>
                            <label for="big-all">Definir todos as letras do texto como maiúsculas...</label>
                        </p>

                        <p>
                            <input type="radio" name="convertionType" value="littleLetters-all" class="radioItems" id="little-all" required>
                            <label for="little-all">Definir todas as letras do texto como minúsculas...</label>
                        </p>

                        <p>
                            <input type="radio" name="convertionType" value="bigLetters" class="radioItems" id="big" required>
                            <label for="big">Definir a primeira letra de todas as palavras como maiúsculas...</label>
                        </p>

                    </div>

                    <div class="submit-button-box">
                        <button type="submit" id="submit-button">Converter</button>
                    </div>

                </form>
            </div>
        </div>
    </body>
</html>