<?php
include_once 'C:/aluno2/xampp/htdocs/criativo-main/conexao.php';
include_once 'C:/aluno2/xampp/htdocs/criativo-main/proc_cad_img.php';

if (isset($_SESSION['msg'])) {
    echo $_SESSION['msg'];
    unset($_SESSION['msg']);
}

// Consulta para obter todas as imagens
$query = "SELECT * FROM imagens";
$result = $conn->query($query);

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minha Página com Estilo Personalizado</title>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<style>
    * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: Arial, sans-serif;
    background-color: #f5f5f5;
    color: #333;
    text-align: center;
}

h1 {
    margin: 20px 0;
    font-size: 36px;
    color: #333;
}


</style>

<body>
    <h1>Galeria de Imagens</h1>

    <div class="galeria">
        <?php
        while ($nome = $result->fetch(PDO::FETCH_ASSOC)) {
            // Definir o diretório e o caminho da imagem
            $diretorio = 'imagens/' . $nome['id_imagem'] . '/';
            $caminho_imagem = $diretorio . $nome['imagem'];
        ?>
            <div class="imagem">
                <img src="<?php echo $caminho_imagem; ?>" alt="<?php echo htmlspecialchars($nome['nomeimg']); ?>">
                <p class="nome"><?php echo htmlspecialchars($nome['nomeimg']); ?></p>
                
                <p class="tag"><?php echo htmlspecialchars($nome['tag']); ?></p>
                <p class="descricao"><?php echo htmlspecialchars($nome['descricao']); ?></p>
            </div>
        <?php } ?>
    </div>

</body>

</html>