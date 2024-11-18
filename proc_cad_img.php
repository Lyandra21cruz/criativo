<?php
session_start();


include_once 'C:/aluno2/xampp/htdocs/criativo-main/conexao.php';

$SendCadImg = filter_input(INPUT_POST, 'SendCadImg', FILTER_SANITIZE_STRING);
if ($SendCadImg) {
    $nome = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
    
    $tag = filter_input(INPUT_POST, 'tag', FILTER_SANITIZE_STRING);
    $desc = filter_input(INPUT_POST, 'descricao', FILTER_SANITIZE_STRING);
    $nome_imagem = $_FILES['imagem']['name'];



    $result_img = "INSERT INTO imagens (nomeimg, imagem, tag, descricao) VALUES (:nomeimg, :imagem, :tag, :descricao)";
    $insert_msg = $conn->prepare($result_img);
    $insert_msg->bindParam(':nomeimg', $nome);
    $insert_msg->bindParam(':imagem', $nome_imagem);
    
    $insert_msg->bindParam(':tag', $tag);
    $insert_msg->bindParam(':descricao', $desc);

    if ($insert_msg->execute()) {
        $ultimo_id = $conn->lastInsertId();

        $diretorio = 'imagens/' . $ultimo_id . '/';

        $_SESSION['msg'] = "<p style='color:green;'>Imagem salva com sucesso!</p>";
        header("Location: index.php");

        mkdir($diretorio, 0755);

       if (move_uploaded_file($_FILES['imagem']['tmp_name'], $diretorio . $nome_imagem)){
        $_SESSION['msg'] = "<p style='color:green;'>Imagem e Dados salva com sucesso!</p>";
        header("Location: index.php");
       }else{
        $_SESSION['msg'] = "<p style='color:red;'>Erro ao salvar Imagem no banco de dados</p>";
        header("Location: index.php");
       }
    } else {
        $_SESSION['msg'] = "<p style='color:red;'>Erro ao salvar no banco de dados</p>";
        header("Location: index.php");
    }

}

?>