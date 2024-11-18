<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minha Página com Estilo Personalizado</title>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<style>
    /* Container para os comentários */
.comentarios {
    max-width: 800px;
    margin: 50px auto;
    padding: 20px;
    background-color: #f9f9f9;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    border-radius: 8px;
}

/* Estilos para a caixa de feedback */
.card {
    background-color: #ffffff;
    padding: 20px;
    margin-bottom: 20px;
    border-radius: 8px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}

.card h2 {
    font-size: 20px;
    color: #333;
    margin-bottom: 10px;
}

.card p {
    font-size: 14px;
    color: #555;
    margin: 5px 0;
}

.card strong {
    font-weight: bold;
    color: #333;
}

/* Estilos para a mensagem quando não há feedbacks */
p {
    text-align: center;
    font-size: 18px;
    color: #888;
}

/* Adicionando espaçamento entre os comentários */
.comentarios .comentario {
    margin-bottom: 20px;
}

/* Melhorando a legibilidade das informações */
.card p strong {
    color: #d25050; /* Cor principal */
}

.card p {
    color: #444; /* Um tom mais suave de cinza */
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
$file = 'feedbacks.json';
if(file_exists($file)) {
    $current_data = file_get_contents($file);
        $feedbacks = json_decode($current_data,true);

        if(!empty($feedbacks)){
            foreach ($feedbacks as $feedback) {
                echo '<div class="comentario">';
             echo '<div class="card">';
             echo '<h2>'.htmlspecialchars($feedback["name"]) .'</h2>';
             echo '<p> <strong> Email: </strong></p>' .htmlspecialchars($feedback["email"]) ;
             echo '<p>' .htmlspecialchars($feedback["feedback"]). '</p>' ;
             echo '</div>';
             echo '</div>';
            } 
        } else{
            echo '<p>Nenhum feedback recebido</p>';
        }
}else{
    echo '<p>Nenhum feedback recebido</p>';
}
?>
</div>
<!-- Botão de Voltar ao Topo -->
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