<?php  
include 'valida.php';
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Gerador de nota fiscal</title>
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="#page-top">LOJA</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ml-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ml-auto">
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#Sobre">Sobre</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#Login">Login</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container">
                <div class="masthead-subheading">BEM-VINDO AO</div>
                <div class="masthead-heading text-uppercase">GERADOR DE NOTAS FISCAIS</div>
                <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#Login">Gerar Notas</a>
            </div>
        </header>
        <!-- Team-->
        <section class="page-section bg-light" id="Sobre">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">SOBRE</h2>
                    <h3 class="section-subheading text-muted">Você quer criar notas fiscais de forma rápida e barata? <br> Pois esse site é perfeito para você! faça seu login e crie quantas notas quiser!</h3>
                </div>
            </div>
        </section>
      
        </div>
        <!-- Contact-->
        <section class="page-section" id="Login">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">LOGIN</h2>
                    <h3 class="section-subheading text-muted">Faça seu login e começe a criar notas fiscais gratuitas.</h3>
                </div>
                <form id="LoginForm" name="sentMessage" novalidate="novalidate" action="afterlogin/index.php" method="POST">
                    <div class="row align-items-stretch mb-5">
                        <div class="col-md-6">
                              <div class="form-group">
                                <input class="form-control" id="email" type="email" placeholder="Seu email" required="required" data-validation-required-message="Por favor insira seu email" />
                                <p class="help-block text-danger"></p>
                            </div>
                               <div class="form-group">
                                <input class="form-control" id="password" type="password" placeholder="Sua senha" required="required" data-validation-required-message="Por favor insira sua senha" />

                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                        <div id="success"></div>
                        <button class="btn btn-primary btn-xl text-uppercase" id="sendMessageButton" type="submit">ENTRAR</button>
                    </div>
                </form>
            </div>
        </section>
        <!-- Footer-->
        <footer class="footer py-4">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 text-lg-left">Copyright © Your Website 2020</div>
                  
                    <div class="col-lg-4 text-lg-right">
                        <a class="mr-3" href="#!">Privacy Policy</a>
                        <a href="#!">Terms of Use</a>
                    </div>
                </div>
            </div>
        </footer>
        </div>
        
        <!-- Bootstrap core JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <!-- Contact form JS-->
        <script src="assets/mail/jqBootstrapValidation.js"></script>
        <script src="assets/mail/contact_me.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
