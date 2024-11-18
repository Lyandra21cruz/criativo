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

/* Estilos gerais para a área de comentários */
.comentarios {
    max-width: 500px;
    margin: 50px auto;
    padding: 20px;
    background-color: #ffffff;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    border-radius: 8px;
    text-align: center;
}

/* Estilos para o título (feedback salvo com sucesso) */
.comentarios h2 {
    font-size: 20px;
    color: #333;
    margin-bottom: 20px;
}

/* Estilos para o botão de visualização dos feedbacks */
.comentarios .botao {
    display: inline-block;
    padding: 10px 20px;
    background-color: #d25050; /* Cor principal */
    color: white;
    font-size: 16px;
    text-decoration: none;
    border-radius: 4px;
    margin-top: 20px;
    transition: background-color 0.3s;
}

.comentarios .botao:hover {
    background-color: #b04040; /* Tom mais escuro */
}

.comentarios .botao:focus {
    outline: none;
    box-shadow: 0 0 5px rgba(210, 80, 80, 0.5);
}

/* Adicionando o estilo para o formulário de feedback */
form {
    display: flex;
    flex-direction: column;
    gap: 15px;
}

form label {
    font-size: 18px;
    color: #333;
    margin-bottom: 5px;
}

form input[type="text"],
form input[type="email"],
form input[type="feedback"] {
    width: 100%;
    padding: 10px;
    font-size: 14px;
    border: 1px solid #ccc;
    border-radius: 4px;
    color: #333;
}

form input[type="text"]:focus,
form input[type="email"]:focus {
    outline: none;
    border-color: #d25050;
    box-shadow: 0 0 5px rgba(210, 80, 80, 0.5);
}

/* Estilizando o botão de envio */
form button {
    width: 100%;
    padding: 12px;
    background-color: #d25050; /* Cor principal */
    color: white;
    font-size: 16px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    transition: background-color 0.3s;
}

form button:hover {
    background-color: #b04040; /* Tom mais escuro */
}

form button:focus {
    outline: none;
    box-shadow: 0 0 5px rgba(210, 80, 80, 0.5);
}
</style>

    <!-- Cabeçalho -->
    <section class="section home" id="home">
    <header class="header">
        <nav>
            <ul class="nav-menu">
                <li><a href="indexhtml.php">Início</a></li>
                <li><a href="index.php">Cadastrar Img</a></li>
              
                <li><a href="contato.php">Contato</a></li>
            </ul>
            <span class="nav-toggle">&#9776;</span>
        </nav>
    </header>

    <!-- Seção Principal (Home) -->
    
        <h2>Cadastre Sua Imagem</h2>
        <p>"A inspiração é como o vento: invisível, mas sempre em movimento."</p>
    </section>

<div class="container">
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $feedback = htmlspecialchars($_POST["feedback"]);

    $data = array(
        "name" => $name,
        "email" => $email,
        "feedback" => $feedback
    );

    $file = 'feedbacks.json';

    if(file_exists($file)) {
        $current_data = file_get_contents($file);
        $array_data = json_decode($current_data, true);
        $array_data[] = $data;
        $final_data = json_encode($array_data, JSON_PRETTY_PRINT);
    } else {
        $array_data = array();
        $array_data[] = $data;
        $final_data = json_encode($array_data, JSON_PRETTY_PRINT);
    }

    if(file_put_contents($file, $final_data)){
        echo '<div class="comentario">';
        echo '<h2>Feedback salvo com sucesso!</h2>';
        echo '<a class="botao" href="exibe_feedbacks.php">Ver feedbacks</a>';
        echo '</div>';
    } else {
        echo '<div class="comentario">';
        echo '<h2>Erro ao salvar seu feedback...</h2>';
        echo '</div>';
    }
}
?>

</div>


<button class="scroll-top">&#8593;</button>

    <script>
        // JavaScript para o botão de voltar ao topo
        const scrollTopBtn = document.querySelector('.scroll-top');
        
        window.addEventListener('scroll', () => {
            if (window.scrollY > 200) {
                scrollTopBtn.classList.add('visible');
            } else {
                scrollTopBtn.classList.remove('visible');
            }
        });

        scrollTopBtn.addEventListener('click', () => {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        });

        // JavaScript para o menu responsivo
        const navToggle = document.querySelector('.nav-toggle');
        const navMenu = document.querySelector('.nav-menu');

        navToggle.addEventListener('click', () => {
            navMenu.classList.toggle('active');
        });
    </script>

</body>
</html>