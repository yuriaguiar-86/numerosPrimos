<?php
    function primos($inicial, $final) {
        $primos = array();

        for($i = $inicial +1; $i <= $final -1; $i++){
            $divisores = 0;

            for($j = $i; $j >= 1; $j--){
                if (($i % $j) == 0) {
                    $divisores++;
                }
            }
             
            if ($divisores == 2){
                $primos[] = $i;
            }
        }

        return $primos;
    }

    $mensagem = '';

    if ($_POST) {
        $inicial = $_POST['inicial'];
        $final = $_POST['final'];

        if (is_numeric($inicial) && is_numeric($final)) {
            if ($inicial < $final) {
                $valores = primos($inicial, $final);

                $mensagem .= '<div class="sucesso">';
                $mensagem .= '<p>Encontrado '. count($valores) .' números primo, são eles:</p><b>';
                foreach($valores as $valor){
                    $mensagem .= $valor .' ';
                }
                $mensagem .= '</b></div>';
            }else{
                $mensagem .= '<div class="erro">'; 
                $mensagem .= '<p><b>O valor inicial deve ser menor que o final!</b></p>';
                $mensagem .= '</div>'; 
            }
            
        }else{
            $mensagem .= '<div class="erro">';
            $mensagem .= '<p><b>Os valores recebidos não são numéricos!</b></p>';
            $mensagem .= '</div>'; 
        }
    }else{
        $mensagem .= '<div class="erro">';
        $mensagem .= '<p><b>Erro ao receber informações do formulário!</b></p>';
        $mensagem .= '</div>'; 
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Resultado</title>
</head>
<body>
    <main>
        <div class="painel">
            <h2>Resultado</h2>
            <div class="conteudo-painel">
                <?php echo $mensagem; ?>
                <a class="botao" href="index.php">Voltar</a>
            </div>
        </div>
    </main>    
</body>
</html>