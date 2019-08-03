<!DOCTYPE html>

<html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Exercício 1</title>
    </head>
    
    <body>

        <div class="main-content"> 

            <h1>Selecione seu carro:</h1>

            <form method="POST" id="form1" action="sel-carro.php"> 
                <div id="model-car-group">

                    <label for="select-box-type-car">
                        <b>Modelo do Carro:</b>
                    </label>

                    <input type="text" id="select-box-car-type" name="car-model" list="car-models" required>
                        <datalist id="car-models">
                            <option value="911">Porsche</option>
                            <option value="Beetle">Volkswagen</option>
                            <option value="Taurus">Ford</option>
                        </datalist>
                </div>
                
                <div id="color-car-group">
                    
                    <label for="select-box-car-color">
                        <b>Cor do Carro:</b>
                    </label>

                    <input type="text" id="select-box-car-color" name="car-color" id="car-colors" list="car-colors" required>
                        <datalist id="car-colors">
                            <option value="Preto">Preto</option>
                            <option value="Prata">Prata</option>
                            <option value="Branco">Branco</option>
                            <option value="Azul">Azul</option>
                            <option value="Verde">Verde</option>
                            <option value="Vermelho">Vermelho</option>
                            <option value="Amarelo">Amarelo</option>
                            <option value="Laranja">Laranja</option>
                            <option value="Rosa">Rosa</option>
                        </datalist>

                </div>
                
                <div id="div-form1-submit-button">
                    <input type="submit" id="form1-submit-button">
                </div>
                
            </form> 
        </div> 
    
    </body>
</html>