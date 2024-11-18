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
    
        <h2>Seja Bem-vindo</h2>
        <p>"Criatividade é a inteligência se divertindo." -Albert Einstein</p>
    </section>
    
    <div class="container">
  <?php
  include_once 'C:/aluno2/xampp/htdocs/criativo-main/1.php';
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
