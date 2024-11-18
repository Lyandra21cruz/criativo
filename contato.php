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
 .corpo{
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    display: flex; /* Ativa o Flexbox */
    justify-content: center; /* Centraliza horizontalmente */
    align-items: center; /* Centraliza verticalmente */
}

.comentarios {
    width: 400px;
    padding: 20px;
    background-color: #ffffff;
    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
    border-radius: 8px;
}
.comentarios h2 {
    font-size: 18px;
    color: #333;
    margin-bottom: 10px;
}

.input-texto {
    width: 100%;
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 4px;
    font-size: 14px;
    color: #333;
}

.input-texto:focus {
    outline: none;
    border-color: #05632ccb; /* Cor principal */
    box-shadow: 0 0 5px #05632ccb;
}

button {
    width: 100%;
    padding: 10px;
    background-color: #05632ccb; /* Cor principal */
    color: #fff;
    font-size: 16px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

button:hover {
    background-color: #05632ccb; /* Tom mais escuro */
}

button:focus {
    outline: none;
    box-shadow: 0 0 5px #05632ccb;
}
</style>
    <!-- Cabeçalho -->
    <section class="section home" id="home">
    <header class="header">
        <nav>
            <ul class="nav-menu">
                <li><a href="indexhtml.php">Início</a></li>
                <li><a href="index.php">Cadastrar Img</a></li>
                
                <li><a href="#contact">Contato</a></li>
            </ul>
            <span class="nav-toggle">&#9776;</span>
        </nav>
    </header>

    <!-- Seção Principal (Home) -->
    
        <h2>Seja Bem-vindo</h2>
        <p>"Criatividade é a inteligência se divertindo." -Albert Einstein</p>
    </section>
    
    <div class="container">
        <div class="corpo">
    <div class="comentarios">
<form action="processa_feedback.php" method="POST">
    <label for="name"> <h2>Nome</h2></label>
    <input type="text" id="name" name="name" placeholder="Digite seu Nome" required="" class="input-texto"><br><br>

    <label for="name"><h2>Email</h2></label>
    <input type="email" id="email" name="email" placeholder="Digite seu Email" required="" class="input-texto"><br><br>

    <label for="name"><h2>Feedback</h2></label>
    <input type="text" id="feedback" name="feedback" placeholder="Deixe seu Feedback" required="" class="input-texto"><br><br>

    <button>Enviar</button>

</form>
</div>
</div>
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
