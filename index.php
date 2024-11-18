<?php
session_start(); 
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
    
        <h2>Cadastre Sua Imagem</h2>
        <p>"A inspiração é como o vento: invisível, mas sempre em movimento."</p>
    </section>
<?php
if(isset($_SESSION['msg'])) {
    echo $_SESSION['msg'];
    unset($_SESSION['msg']);
}
?>

<div class="container">
<h2>Cadastro de imagem</h2>
<form method="POST" action="proc_cad_img.php" enctype="multipart/form-data" class="formulario">
    <label for="name" class="label-form">Nome:</label>
    <input type="text" name="name" id="name" placeholder="Digitar o nome" class="input-form"><br><br>

    <label for="imagem" class="label-form">Imagem</label>
    <input type="file" name="imagem" id="imagem" class="input-form"><br><br>

   

    <label for="tag" class="label-form">Tag</label>
    <input type="text" name="tag" id="tag" placeholder="#" class="input-form"><br><br>

    <label for="descricao" class="label-form">Descrição:</label>
    <input type="text" name="descricao" id="descricao" placeholder="Descrição" class="input-form"><br><br>

    <input name="SendCadImg" type="submit" value="Cadastrar" class="btn-submit">
</form>

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
