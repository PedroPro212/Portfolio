<!DOCTYPE html>
<html lang="pt-Br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orçamento</title>
    <link rel="icon" type="image/x-icon" href="/img/DEV.png">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="/style/orcamento.css" type="text/css" rel="stylesheet">
    <link href="../config/navbar.css" type="text/css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>

    <header>
        <nav>
          <a class="logo" href="/index.html" style="text-decoration: none;">Programação Diária</a>
          <div class="mobile-menu">
            <div class="line1"></div>
            <div class="line2"></div>
            <div class="line3"></div>
          </div>
          <ul class="nav-list">
            <li><a href="/index.html">Início</a></li>
            <li><a href="/pages/habilidades.html">Habilidades</a></li>
            <li><a href="pages/projetos.html">Projetos</a></li>
            <li><a href="/pages/orcamento.php">< Orçamento /></a></li>
          </ul>
        </nav>
    </header>

    <main>
        <div class="container text-center" style="width:80%; font-family: 'Secular One', sans-serif; margin-top:50px;">
            <div class="row">
                <h1 style="text-decoration:none;">Necessitando de um <a style="color:#03CFB0">site</a>,<br /><a style="color:#8F3EF4; text-decoration:none;">automação</a>/<a style="color:#03CFB0; text-decoration:none;">bot</a> ou <a style="color:#8F3EF4; text-decoration:none;">aplicação</a>?</h1>
                <p style="color:white; font-size:18px; margin-top:40px;">Sem sombras de dúvidas um comércio necessita de um WebSite para conseguir destque na internet em 2022, ou um WebApp para gerir uma loja ou algo parecido.  Também exixte a automação de sistema web, onde aquela tarefa 
                    que você faz repetidas vezes acaba sendo automatizada, assim fazendo você ecônomizar tempo!</p>
            </div>
        </div>
    
        <div class="container" style="margin-top:80px;">
            <div class="row">
                <div class="col-sm-4">
                    <h3 style="font-size:30px; margin-bottom:30px;">Descreva para mim o que precisa:</h3>
                    <p style="font-size:15px; text-align:left; margin-bottom:25px;"><img  src="../img/seta.png" width="30" />Descreva o máximo que conseguir, assim conseguimos retornar com mais agilidade</p>
                    <p style="font-size:15px; text-align:left; margin-bottom:25px;"><img  src="../img/seta.png" width="30" />Se for um site descreva como deve ser na sua mente. Funcionalidades, layout, cores, se vai possuir vídeos e etc...</p>
                    <p style="font-size:15px; text-align:left; margin-bottom:25px;"><img  src="../img/seta.png" width="30" />Se for uma automação descreva o que precisa automatizar em detalhes, se é site que obriga a fazer login, obriga a mexer com relatório, excel e etc...</p>
                </div>
                <div class="col-sm-2"></div>
                <div class="col-sm-6" style="margin-top:40px;">
                    <div class="container">
                        <div class="quadro" style="color: black;">
                            <h3 class="text-center" style="padding-top: 2vh;">Entar em contato</h3>
                            <form id="contact-form" style="color:black;margin-top: 2vh; padding-left: 2vh ;padding-bottom: 2vh;" method="post" action="../php/email.php">
                                <label for="name">Nome:</label>
                                <input type="text" id="name" class="nome" name="name" required>

                                <label for="tel">Tel:</label>
                                <input type="number" id="tel" class="telefone" name="tel" required><br>

                                <label for="email">Email:</label>
                                <input type="text" id="email" class="email" name="email" required><br>

                                <label for="message"></label>
                                <textarea id="message" class="descricao center-block" name="message" required placeholder="Assunto:" style="padding-left: 2px;"></textarea>

                                <button type="submit" class="botao center-block" name="enviar">Enviar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <footer class="text-center" style="color:white; margin-top:50px;">
            <p>Todos os direitos reservados</p>
            <p><b>Termos de privacidade – Todos os direitos reservados – Termos de Uso </br> <time data="2023">2023</time></b></p>
        </footer>
        
    </main>

    <script src="../config/navbar.js"></script>

</body>
</html>