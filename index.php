<?php 

$db = "Olá Mundo \u{1F30E}";
echo "$db <br>";
//Quando são usadas aspas duplas (Double Quoted), o PHP interpreta e analisa o conteúdo para exibi-lo

$smp = 'Olá Mundo $db \u{1F30E}';
echo "$smp <br>";
echo '$smp<br>';
//Quando são usadas aspas simples (Simple Quoted), o conteúdo é mostrado sem interpretação

const ESTADO = "MG";
echo "Eu moro em ".ESTADO; echo "<br>";
//Constantes devem ser exibidas usando o Operador de Concatenação (.), já que elas não possuem o identificador $ como as Variáveis

$nome = "Rodrigo";
$sobrenome = "Nogueira";
echo "$nome \"Minotauro\" $sobrenome <br>";
//Para exibir um termo entre aspas, pode ser usado a Sequência de Escape --> \"  \"

//Escape Sequences(sequências de escape) que podem ser úteis:
// \n ---> Nova linha
// \t ---> Tabulação Horizontal
// \\ ---> Barra Invertida
// \$ ---> Sinal de Cifrão
// \u{} ---> Codepoint Unicode(como símbolos e emojis)

//Sintaxes de String que podem ser úteis:

//Heredoc ---> Escrever em múltiplas linha COM interpretador *OBS : Só funciona com saída de Texto, HTML não!
$curso = "PHP";
$ano = date('Y');
echo <<< FRASE
    Estou estudando $curso
        no ano de $ano <br>
FRASE;


//Nowdoc ---> Escrever em múltiplas linha SEM interpretador('') *OBS : Só funciona com saída de Texto, HTML não!
$curso_two = "PHP";
$ano_two = date('Y');
echo <<< 'FRASE'
    Estou estudando $curso_two
        no ano de $ano_two
FRASE;

?>