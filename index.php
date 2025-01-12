<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos Primitivos em PHP</title>
</head>
<body>
    <h1>Teste de Tipos Primitivos em PHP</h1>

<?php 

//0x é Hexadecimal --- 0b é  Binário --- 0 é Octal
    
$numer = 0x1A;
echo "O valor da primeira variável é $numer<br>";

$numero = 300;
echo "A segunda variável tem o seguinte tipo e valor: "; var_dump($numero); echo "<br>";

$testeUm = 10.7;
echo "A terceira variável tem o seguinte tipo e valor: "; var_dump($testeUm); echo "<br>";

$testeDois = false;
echo "A quarta variável tem o seguinte tipo e valor: "; var_dump($testeDois); echo "<br>";

$testeTres = "Heitor";
echo "A quinta variável tem o seguinte tipo e quantidade de caracteres: "; var_dump($testeTres); echo "<br>";

$testeQuatro = 3e2;
echo "A sexta variável tem o seguinte tipo e valor: "; var_dump($testeQuatro); echo "<br>";

$vet = [2,true,7.5,"Heitor"];
echo "Dentro do vetor(ou array) há as seguintes posições, tipos e valores: ";var_dump($vet); echo "<br>";

class Pessoa {
    private string $nome;
}

$p = new Pessoa;
echo "Testando o tipo Obejct:  "; var_dump($p);

?>   
</body>
</html>