<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto 01</title>
    <meta name="description" content="Descrição do meu website">
    <meta name="keywords" content="Palavras,chave,do,meu,site">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="estilo/style.css">
</head>
<body>
    <header>
        <div class="center">
            <div class="logo left">Logomarca</div>
            <!-- logo -->
             <nav class="desktop right">
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Sobre</a></li>
                    <li><a href="#">Serviços</a></li>
                    <li><a href="#">Contato</a></li>
                </ul>
             </nav>
             <!-- desktop -->
             <nav class="mobile right">
                <div class="botao-menu-mobile">
                    <i class="fas fa-bars"></i>
                    <!-- fa-bars -->
                </div>
                <!-- botao-menu-mobile -->
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Sobre</a></li>
                    <li><a href="#">Serviços</a></li>
                    <li><a href="#">Contato</a></li>
                </ul>
             </nav>
            <!-- mobile -->
            <div class="clear"></div>
            <!-- clear -->
        </div>
        <!-- center -->
    </header>

    <section class="banner-principal">
        <div class="overlay"></div>
        <!-- overlay -->
        <div class="center">
            <form>
                <h2>Qual o seu melhor e-mail?</h2>
                <input type="email" name="email" required>
                <input type="submit" name="acao" value="Cadastrar">
            </form>
        </div>
        <!-- center -->
    </section>
    <!-- banner-principal -->
     
    <section class="descricao-autor">
        <div class="center">
            <div class="w50 left">
                <h2>Guilherme C. Grillo</h2>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi id officiis quod consectetur vitae dignissimos illum at, nemo laborum eligendi architecto voluptas numquam odio voluptate asperiores, ullam impedit quae. Neque? nemo laborum eligendi architecto voluptas numquam odio voluptate asperiores, ullam impedit quae. Neque?
                </p>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi id officiis quod consectetur vitae dignissimos illum at, nemo laborum eligendi architecto voluptas numquam odio voluptate asperiores, ullam impedit quae. Neque? nemo laborum eligendi architecto voluptas numquam odio voluptate asperiores, ullam impedit quae. Neque?
                </p>
            </div>
            <!-- w50 -->
            <div class="w50 left">
                <img class="right" src="images/foto.jpg">
                <!-- right -->
            </div>
            <!-- w50 -->
            <div class="clear"></div>
            <!-- clear -->
        </div>
        <!-- center -->
    </section>
    <!-- descricao-autor -->

    <section class="especialidades">
        <div class="center">
            <h2 class="title">Especialidades</h2>
            <!-- title -->
            <div class="w33 left box-especialidade">
                <h3><i class="fab fa-css3-alt"></i></h3>
                <h3>CSS3</h3>
                <p>
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Reiciendis est, ipsum nulla sed, optio amet labore libero explicabo ex, doloribus obcaecati quia repellat enim! Tempore delectus explicabo repellendus error similique!
                </p>
            </div>
            <!-- box-especialidade -->
            <div class="w33 left box-especialidade">
                <h3><i class="fab fa-html5"></i></h3>
                <h3>HTML5</h3>
                <p>
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Reiciendis est, ipsum nulla sed, optio amet labore libero explicabo ex, doloribus obcaecati quia repellat enim! Tempore delectus explicabo repellendus error similique!
                </p>
            </div>
            <!-- box-especialidade -->
            <div class="w33 left box-especialidade">
                <h3><i class="fab fa-js"></i></h3>
                <h3>JavaScript</h3>
                <p>
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Reiciendis est, ipsum nulla sed, optio amet labore libero explicabo ex, doloribus obcaecati quia repellat enim! Tempore delectus explicabo repellendus error similique!
                </p>
            </div>
            <!-- box-especialidade -->
            <div class="clear"></div>
            <!-- clear -->
        </div>
        <!-- center -->
    </section>
    <!-- especialidades -->
    <section class="extras">
        <div class="center">
            <div class="w50 left">
                <h2 class="title">Depoimentos</h2>
                <!-- title -->
                <div class="depoimento-single">
                    <p class="depoimento-descricao">Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio, voluptatum! Lorem ipsum dolor, sit amet consectetur adipisicing elit. Minima, aut non doloribus officiis veritatis in quaerat quos magnam necessitatibus odit ipsam, odio dolores nihil sapiente, exercitationem vitae nemo quia ipsa!</p>
                    <!-- depoimento-descricao -->
                    <p class="nome-autor">Lorem Ipsum</p>
                    <!-- nome-autor -->
                </div>
                <!-- depoimento-single -->
                <div class="depoimento-single">
                    <p class="depoimento-descricao">Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio, voluptatum! Lorem ipsum dolor, sit amet consectetur adipisicing elit. Minima, aut non doloribus officiis veritatis in quaerat quos magnam necessitatibus odit ipsam, odio dolores nihil sapiente, exercitationem vitae nemo quia ipsa!</p>
                    <!-- depoimento-descricao -->
                    <p class="nome-autor">Lorem Ipsum</p>
                    <!-- nome-autor -->
                </div>
                <!-- depoimento-single -->
                <div class="depoimento-single">
                    <p class="depoimento-descricao">Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio, voluptatum! Lorem ipsum dolor, sit amet consectetur adipisicing elit. Minima, aut non doloribus officiis veritatis in quaerat quos magnam necessitatibus odit ipsam, odio dolores nihil sapiente, exercitationem vitae nemo quia ipsa!</p>
                    <!-- depoimento-descricao -->
                    <p class="nome-autor">Lorem Ipsum</p>
                    <!-- nome-autor -->
                </div>
                <!-- depoimento-single -->
            </div>
            <!-- w50 -->
            <div class="w50 left">
                <h2 class="title">Serviços</h2>
                <!-- title -->
                <div class="servicos">
                    <ul>
                        <li>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</li>
                        <li>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</li>
                        <li>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</li>
                    </ul>
                </div>
                <!-- servicos -->
            </div>
            <!-- w50 -->
            <div class="clear"></div>
            <!-- clear -->
        </div>
        <!-- center -->
    </section>
    <!-- extras -->

    <footer>
        <div class="center">
            <p>Todos os direitos reservados</p>
        </div>
        <!-- center -->
    </footer>
</body>
</html>