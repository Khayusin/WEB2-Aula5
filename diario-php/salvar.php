<?php
if (isset($_GET['entrada'])) {
    $entrada = $_GET['entrada'];

    if (!empty(trim($entrada))) {
        
        $arquivo = fopen('diario.md', 'a');

        if ($arquivo) {
            
            $linha = "Entrada: " . $entrada . "\n---\n";
            
            
            fwrite($arquivo, $linha);
            
            fclose($arquivo);

            echo "<p style='color: green;'>Dados salvos com sucesso no arquivo diario.md!</p>";
            echo '<a href="index.php">Escrever mais</a> | ';
            echo '<a href="ver.php">Ver Diário</a>';
        } else {
            echo "<p style='color: red;'>Erro ao abrir o arquivo diario.md.</p>";
        }
    } else {
        echo "<p style='color: red;'>O campo de texto está vazio.</p>";
    }
} else {
    echo "<p>Nenhum dado recebido.</p>";
    echo '<br><a href="index.php">Voltar</a>';
}
?>