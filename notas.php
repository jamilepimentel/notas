<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classificação de Nota</title>
</head>

<body>
    <h2>Insira uma nota de 0 a 10:</h2>
    <form method="POST" action="">
        <label for="nota">Nota:</label>
        <input type="number" name="nota" id="nota" min="0" max="10" step="1" required>
        <input type="submit" value="Enviar">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Receber a nota enviada pelo formulário
        $nota = intval($_POST['nota']);

        // Verificar a classificação da nota usando switch
        switch ($nota) {
            case 10:
                $classificacao = "A";
                break;
            case 9:
                $classificacao = "B";
                break;
            case 8:
            case 7:
                $classificacao = "C";
                break;
            case 6:
            case 5:
                $classificacao = "D";
                break;
            case 4:
            case 3:
            case 2:
            case 1:
            case 0:
                $classificacao = "F";
                break;
            default:
                $classificacao = "Nota inválida!";
                break;
        }

        echo "<h3>Sua classificação é: $classificacao</h3>";
    }
    ?>
</body>

</html>
