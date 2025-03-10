<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Lilita+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="Css/styles.css">

    <title>Cafeteria</title>
</head>

<body>
    <!-- Inicio Header -->

    <header class="header">
        <section>
            <a href="" class="logo">
                <img src="Img/menu-1.png" alt="">
            </a>

            <nav class="navbar">
                <a href="">Home</a>
                <a href="#sobre">Sobre</a>
                <a href="#menu">Menu</a>
                <a href="#avaliacao">Avaliações</a>
                <a href="#endereco">Endereço</a>
            </nav>

            <div class="icons">
                <!-- LINK DA IMAGEM DA LUPA -->
                <svg width="30px" height="30px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill="#ffffff">
                    <path d="M15.25 0a8.25 8.25 0 0 0-6.18 13.72L1 
            22.88l1.12 1 8.05-9.12A8.251 8.251 0 1 0 15.25.01V0zm0 15a6.75 6.75 0 1 1 0-13.5 6.75 6.75 0 0 1 0 13.5z" />
                </svg>

                <!-- LINK DA IMAGEM DO CARRINHO -->
                <svg width="30px" height="30px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M2 2h4v4h16v11H4V4H2V2zm4 13h14V8H6v7zm0 4h3v3H6v-3zm14 0h-3v3h3v-3z" fill="#ffffff" />
                </svg>

            </div>
        </section>
    </header>
    <!-- Fim Header  -->

    <!-- Começo Banner  -->
    <img src="Img/Design sem nome (3).png" alt="" class="banner">
    <!-- Fim Banner  -->

    <!-- Começo sobre nós  -->
    <section class="about" id="about">
        <h2 class="title">Sobre <span>Nós</span> </h2>
        <div class="row">
            <div class="container-image">
                <img src="Img/cafe1.jpg" alt="image-sobre " style="width: 95%;">
            </div>

            <div class="content">
                <h2>O que faz o nosso café especial</h2>
                <br>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed natus laudantium n
                    isi? Dolorum mollitia temporibus facilis autem quod voluptates quibusdam? Optio ducimus illum deserunt iste
                    rem error temporibus blanditiis culpa!
                </p>
                <br>
                <br>
                <a href="#sobre" class="btn botao">Saiba Mais </a>
            </div>
        </div>
    </section>
    <!-- Fim sobre nós  -->

    <!-- Produtos -->
    <h2 class="title">Produ <span>tos</span> </h2>
 
        <div class="flex">
            <div class="card">
                <img src="Img/Cafe .webp" alt="Denim Jeans" style="width:100%">
                <h1>Café Expresso</h1><br>
                <p class="price">R$19.99</p>
                <br>
                <br>
                <p>Some text about the jeans. Super slim and comfyb <br> lorem ipsum lorem jeansum. Lorem jeamsun denim lorem jeansum.</p><br>
                <br>
                <p><button>Add to Cart</button></p>
            </div>

            <div class="card">
                <img src="Img/Cafe 2.webp" alt="Denim Jeans" style="width:100%">
                <h1>Café Expresso</h1><br>
                <p class="price">R$19.99</p>
                <br>
                <br>
                <p>Some text about the jeans. Super slim and comfy <br>lorem ipsum lorem jeansum. Lorem jeamsun denim lorem jeansum.</p><br>
                <br>
                <p><button>Add to Cart</button></p>
            </div>
           
                <div class="card">
                    <img src="Img/cafe 3.jpg" alt="Denim Jeans" style="width:100%">
                    <h1>Café Expresso</h1><br>
                    <p class="price">R$19.99</p>
                    <br>
                    <br>
                    <p>Some text about the jeans. Super slim and comfy <br> lorem ipsum lorem jeansum. Lorem jeamsun denim lorem jeansum.</p><br>
                    <br>
                    <p><button>Add to Cart</button></p>
                </div>
            
        
    </div>
        <!-- Fim Produtos  -->
  
        <footer class="footer-cafeteria">
    <div class="footer-cafeteria__container">
        <!-- Endereço -->
        <div class="footer-cafeteria__col footer-cafeteria__col-endereco">
            <h3 class="footer-cafeteria__col-titulo">Endereço</h3>
            <p class="footer-cafeteria__col-texto">Rua Pedro Henrique, 123 - São Paulo, SP</p>
        </div>

        <!-- Formas de Pagamento -->
        <div class="footer-cafeteria__col footer-cafeteria__col-pagamento">
            <h3 class="footer-cafeteria__col-titulo">Formas de Pagamento</h3>
            <ul class="footer-cafeteria__col-lista">
                <li class="footer-cafeteria__col-item">
                    <i class="footer-cafeteria__col-icon fas fa-credit-card"></i> Cartões de Crédito
                </li>
                <li class="footer-cafeteria__col-item">
                    <i class="footer-cafeteria__col-icon fas fa-university"></i> Transferência Bancária
                </li>
                <li class="footer-cafeteria__col-item">
                    <i class="footer-cafeteria__col-icon fas fa-wallet"></i> PayPal
                </li>
                <li class="footer-cafeteria__col-item">
                    <i class="footer-cafeteria__col-icon fas fa-cash-register"></i> Dinheiro
                </li>
            </ul>
        </div>

        <!-- Horários de Funcionamento -->
        <div class="footer-cafeteria__col footer-cafeteria__col-horarios">
            <h3 class="footer-cafeteria__col-titulo">Horários de Funcionamento</h3>
            <p class="footer-cafeteria__col-texto">Segunda a Sexta: 8h às 18h</p>
            <p class="footer-cafeteria__col-texto">Sábado: 9h às 14h</p>
            <p class="footer-cafeteria__col-texto">Domingo: Fechado</p>
        </div>

        <!-- Contato -->
        <div class="footer-cafeteria__col footer-cafeteria__col-contato">
            <h3 class="footer-cafeteria__col-titulo">Contato</h3>
            <p class="footer-cafeteria__col-texto"><i class="footer-cafeteria__col-icon fas fa-phone"></i> (11) 1234-5678</p>
            <p class="footer-cafeteria__col-texto"><i class="footer-cafeteria__col-icon fas fa-envelope"></i> contato@cafeteria.com</p>
            <p class="footer-cafeteria__col-texto"><i class="footer-cafeteria__col-icon fas fa-map-marker-alt"></i> São Paulo, SP</p>
        </div>

        <!-- Redes Sociais -->
        <div class="footer-cafeteria__col footer-cafeteria__col-redes-sociais">
            <h3 class="footer-cafeteria__col-titulo">Redes Sociais</h3>
            <div class="footer-cafeteria__col-icons">
                <a href="https://facebook.com" target="_blank" class="footer-cafeteria__col-social-icon">
                    <i class="footer-cafeteria__col-icon-facebook fab fa-facebook-f"></i>
                </a>
                <a href="https://instagram.com" target="_blank" class="footer-cafeteria__col-social-icon">
                    <i class="footer-cafeteria__col-icon-instagram fab fa-instagram"></i>
                </a>
                <a href="https://twitter.com" target="_blank" class="footer-cafeteria__col-social-icon">
                    <i class="footer-cafeteria__col-icon-twitter fab fa-twitter"></i>
                </a>
            </div>
        </div>
    </div>


    <h3 style="padding:5px;padding-top:20px">Copyright Pedro Henrique 2025</h3>
</footer>


</body>

</html>