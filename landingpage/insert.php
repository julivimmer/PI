<?php include_once "database.php";?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/medias.css">
    <link rel="stylesheet" href="css/modal.css">
    <link rel="shortcut icon" href="../favicon.png" type="image/x-icon">
   <!--<link rel="stylesheet" href="css/medias.css">-->
    <title>Planilha Controle de Gastos | Luciane Vimmer</title>
</head>
<body>
    <!--Cabeçalho com logo e menu de navegação da página-->
    <header id="header">
       <div class="container">
            <img src="img/logo/logo-clara-pequena.png" alt="Luciane Vimmer | contadora">
            <nav>
                <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Serviços</a></li>
                <li><a href="#">Contato</a></li>
                </ul> 
            </nav>
       </div>
    </header>

    <!--Título, texto, formulário e imagem inicial-->
    <section class="hero">
        <div class="container">
            <div class="textBx">
                <h2>Deixe as contas em dia!</h2>
                <p>Esta planilha vai te ajudar muito com seus planos e objetivos.</p>

                <legend>Seu e-mail</legend>
                <form name="form" action="#" method="post">
                    <input type="email" name="email" id="email" onkeypress="validarEmail()" onfocus="redefinirMsg()" required>
                    <span id="error-email"></span>
                    
                    <br>
                    <!-- <button type="submit" class="btn" value="Receba sua planilha já!" onclick="return validar()"> -->
                    
                    <button class="btn" type="submit">Receba sua planilha já!</button>
                </form>
                
            </div>
            <img src="img/finance.png" alt="Ilustração mostra de forma rasa uma boa finança através de gráficos">
        </div>
    </section>

    <!--Lista de benefícios da planilha-->
    <section class="services">
        <div class="heading">
            <h3>Conheça os benefícios</h3>
        </div>
        <div class="content">
            <div class="servicesBx">
                <img src="img/icons/rocket2.png" alt="Icone de checado">
                <h4>Alcance suas metas</h4>
                <p>
                    Organize suas finanças de forma prática e simples.
                </p>
            </div>
            <div class="servicesBx">
                <img src="img/icons/financa2.png" alt="Icone de grafico">
                <h4>Maior controle financeiro</h4>
                <p>
                    Controle claramente seus gastos com gráficos simples de entender.
                </p>
            </div>
            <div class="servicesBx">
                <img src="img/icons/custom2.png" alt="Icone de customizável">
                <h4>Personalizável</h4>
                <p>
                    Adicione e exclua itens da forma que faça mais sentido para você!<br> <p><strong>Confira abaixo como.</strong></p>
                </p>
            </div>
        </div>
    </section>

    <!--Vídeo explicativo para personalizar a planilha-->
    <section class="video">
        <iframe src="https://www.youtube.com/embed/01CTqKGxdkE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

        <div class="contentBx">
            <h3>Deixe a planilha do seu jeito!</h3>
            <p>Completamente personalizável para o seu gosto.</p>
            <img src="img/icons/seta.png" alt="Seta apostando para esquerda">
            <p>Acompanhe o tutorial neste vídeo para conferir todos os seus recursos!</p>
        </div>
    </section>

    <!--Texto, botão e imagens finais-->
    <section class="antihero">
        <div class="container">
            <div class="textBx">
                <h2>Tenha a certeza que seu dinheiro está indo pro lugar certo!</h2>
                <p>Não fique mais sem entender por que não consegue fazer aquela viagem nas férias ou a essencial poupança.</p>
                <a href="" class="btn">Receba sua planilha já!</a>
            </div>
            <img src="img/investing.png" alt="Ilustração mostra uma poupança ocasionada por uma boa gestão de gastos">
        </div>
    </section>

    <!--Rodapé com links de contato e créditos-->
    <footer>
        <div class="footerContent">
            <h3>Luciane Vimmer | contadora</h3>
            <p>Entre em contato</p>
            <ul class="social">
                <li><a title="Linked in" href="#"><img src="../img/footer/linkedin.png" alt="Linked in"></a></li>
                <li><a title="Whatsapp" href="#"><img src="../img/footer/whatsapp.png" alt="Whatsapp"></a></li>
                <li><a title="E-mail" href="#"><img src="../img/footer/email.png" alt="Endereço de e-mail"></a></li>
                <li><a title="Localicação" href="#"><img src="../img/footer/localizacao.png" alt="Localicação"></a></li>
            </ul>
        </div>
        <div class="footerBottom">
            <p>Curitiba, PR &copy;2021 Luciane Vimmer. Designed by: zuzizana.</p>
        </div>
    </footer>
    
    <!--Modal-->
    <div id="modal" class="modal-container">
        <div class="modal">
            <button class="fechar">x</button>
            <img src="img/planilha.png" alt="Ilustração mostra um homem organizando sua planilha online">
            <h3>A planilha foi enviada para seu e-mail! :)</h3>
            <a href="#" class="btn">Dicas para personalizá-la</a>
        </div>
    </div>

    <script>      
        function iniciaModal(modalID){
            const modal = document.getElementById(modalID);
            if(modal){
                modal.classList.add('mostrar');
                modal.addEventListener('click', function(evento){
                    if(evento.target.id == modalID || evento.target.className == 'fechar'){
                        modal.classList.remove('mostrar');
                    }
                });
            }
        }
        
        const botao = document.querySelector('.btn');
        botao.addEventListener('click', function(){
            iniciaModal('modal');
        });
        
        function validarEmail(){
            var email = document.querySelector('#email');
            var error = document.querySelector('#error-email');

            if(!email.checkValidity()){
                error.innerHTML = "E-mail inválido."
            }
        }

        function redefinirMsg(){
            var error = document.querySelector('#error-email');
            if (error.innerHTML == "E-mail inválido"){
                error.innerHTML = "";
            }
        }

        //const botao = document.querySelector('.btn');
        //botao.addEventListener('click', function(){
        //    iniciaModal('modal');
        //});
        
        //function validar(){
         //   var email = form.email.value;

           // if(email == ""){
             //   alert('Preencha o email');
               // form.email.focus();
                //return false;
            //}else{
              //  const botao = document.querySelector('.btn');
                //botao.addEventListener('click', function(){
                  //  iniciaModal('modal');
               // });
            //}
        //}

        window.onscroll = function() {stickyHeader()};

        var header = document.getElementById("header");
        var sticky = header.offsetTop;

        function stickyHeader() {
            if (window.pageYOffset > sticky) {
                header.classList.add("sticky");
            } else {
                header.classList.remove("sticky");
            }
        }
    </script>
</body>
</html>