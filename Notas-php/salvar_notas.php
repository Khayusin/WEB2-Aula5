<?php
if (isset($_GET['nome']) && isset($_GET['nota1']) && isset($_GET['nota2']) && isset($_GET['nota3'])) {
    $nome = $_GET['nome'];
    $nota1 = $_GET['nota1'];
    $nota2 = $_GET['nota2'];
    $nota3 = $_GET['nota3'];

    $linha = $nome . "," . $nota1 . "," . $nota2 . "," . $nota3 . PHP_EOL;

    $arquivo = fopen('notas.txt', 'a');

    if ($arquivo) {
        fwrite($arquivo, $linha);
        
        fclose($arquivo);

        echo "<p style='color: green;'>Notas do aluno salvas com sucesso no arquivo notas.txt!</p>";
        echo '<a href="index.php">Cadastrar outro aluno</a>';
    } else {
        echo "<p style='color: red;'>Erro ao abrir o arquivo notas.txt.</p>";
    }
} else {
    echo "<p>Nenhum dado recebido.</p>";
    echo '<br><a href="index.php">Voltar</a>';
}
?>