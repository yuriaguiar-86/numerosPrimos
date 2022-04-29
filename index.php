<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">

    <title>Número Primos</title>
</head>

<body>

    <main>
        <div class="painel">
            <h2>Instruções</h2>
            <div class="conteudo-painel">
                <p>Esta aplicação tem como finalidade listar os números primos que estão entre o intervalo que será determinado ao lado pelo usuário, ignorando as entradas!</p>
                <p>Exemplo:</p>

                <ul>
                    <li>Número Inicial: 10</li>
                    <li>Número Final: 29</li>
                    <li>Resposta: Encontrados 5 números primos, são eles: <b>11,13,17,19,23</b></li>
                </ul>
            </div>
        </div>

        <div class="painel">
            <h2>Entre com os valores</h2>

            <div class="conteudo-painel">
                <form action="calculo.php" method="POST">
                    <label for="inicial">Inicial</label>
                    <input type="number" class="campoTexto" name="inicial" required />

                    <label for="final">Final</label>
                    <input type="number" class="campoTexto" name="final" required />

                    <button class="botao" type="submit">Calcular</button>
                </form>
            </div>
        </div>
    </main>

</body>
</html>