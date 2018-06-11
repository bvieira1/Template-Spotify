<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="BV WEB - Cristiano Borges">
    <meta name="keywords" content="WebSite Bootstrap">
    <meta name="description" content="Template em Bootstrap" />

    <title>Música para todos - Spotify</title>
      
      <link rel="icon" href="imagens/favicon.png">

    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="estilo.css" rel="stylesheet">
    <link href="bootstrap/css/animate.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

      <nav class="navbar navbar-fixed-top navbar-inverse navbar-transparente">
        <div class="container">
            
            <!--header-->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bara-navegacao">
                    <span class="sr-only">alternar navegação</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            
                <a href="index.html" class="navbar-brand">
                    <span class="img-logo">Spotify</span>
                </a>
            
            </div>
            <div class="collapse navbar-collapse" id="bara-navegacao">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#">Premium</a></li>
                    <li><a href="#">Ajuda</a></li>
                    <li><a href="#">Baixar</a></li>
                    <li class="divisor" role="separator"></li>
                    <li><a href="#">Inscreva-se</a></li>
                    <li><a href="#">Entrar</a></li>
                </ul>
            </div>
        </div><!--/container-->
      </nav><!--/nav-->
      
      <div class="capa">
          <div class="texto-capa">
             <h1 class="wow bounceInDown">Música para todos</h1>
             <a href="#" class="btn btn-custom btn-roxo btn-lg">Aproveite o Spotify Free</a> 
             <a href="#" class="btn btn-custom btn-branco btn-lg">Obter Spotify Premium</a> 
          </div>
      </div>
      
      <!--conteudos-->
      <section id="servicos">
        <div class="container">
          <div class="row">
              
              <!--albuns-->
              <div class="col-md-6" >
              
                  <div class="row albuns ">
                      <div class="col-md-6">
                      <img src="imagens/img1.jpg" class="img-responsive">
                      </div>
                        <div class="col-md-6">
                      <img src="imagens/img2.jpg" class="img-responsive">
                      </div>
                  </div><!--row-->
                  
                    <div class="row albuns">
                      <div class="col-md-6">
                      <img src="imagens/img3.jpg" class="img-responsive">
                      </div>
                        <div class="col-md-6">
                      <img src="imagens/img4.jpg" class="img-responsive">
                      </div>
                  </div><!--row-->
                  
              </div>
              
              <!--servicos-->
               <div class="col-md-6 ">
                <h2>O que o Spotify tem?</h2>
                   
                   <h3>Músicas</h3>
                   <p>O Spotify tem milhões de músicas. Escute seus sons favoritos, descubra novas musicas e reúna seus favoritos em um só lugar.</p>
                   
                   <h3>Playlists</h3>
                   <p>No Spotify você encontra uma playlist para cada momento. Todas feitas por fanáticos e especialistas da músicas.</p>
                   
                   <h3>Novos lançamentos</h3>
                   <p>Escute os novos lançamentos de singles e álbuns da semana e veja o que está bombando no Top 50.</p>
                   
              </div>
          </div>
        </div>
      </section>
      
      <section id="recursos">
         <div class="container">
           <div class="row">
                  <!--servicos-->
             <div class="col-md-4">
                  <h2>Fácil</h2>
                   
                   <h3>Buscar</h3>
                   <p>Já sabe o que quer escutar? É só procurar e apertar o play.</p>
                   
                   <h3>Navegar</h3>
                   <p>Veja os novos lançamentos, o que está bombando nas paradas e as melhores playlists para o seu momento.</p>
                   
                   <h3>Descobrir</h3>
                   <p>Curta músicas novas toda segunda-feira com uma playlist personalizada pra você. Ou relaxe e curta uma das rádios.</p>
              </div>
                  <!--img recursos-->
              <div class="col-md-8" >
                    <div class="row rotacionar">
                      <div class="col-md-6">
                      <img src="imagens/iphone1.png" class="img-responsive">
                      </div>
                        <div class="col-md-6">
                      <img src="imagens/iphone2.png" class="img-responsive">
                      </div>
                  </div><!--row-->
              </div>
            </div>
          </div>
      </section>
      
      <!--rodape-->
      <footer id="rodape">
        <div class="container">
          <div class="row">
            
            <div class="col-md-2">
              <span class="img-logo">Sportify</span>
            </div>
              
            <div class="col-md-2">
              <h4>Company</h4>
                <ul class="nav">
                    <li><a href="#">Sobre</a></li>
                    <li><a href="#">Empregos</a></li>
                    <li><a href="#">Imprensa</a></li>
                    <li><a href="#">Novidades</a></li>
                </ul>
            </div>
              
              <div class="col-md-2">
              <h4>Comunidade</h4>
                <ul class="nav">
                    <li><a href="#">Artistas</a></li>
                    <li><a href="#">Desenvolvedores</a></li>
                    <li><a href="#">Marcas</a></li>
                </ul>
            </div>
              
              <div class="col-md-2">
              <h4>Links Úteis</h4>
                <ul class="nav">
                    <li><a href="#">Ajuda</a></li>
                    <li><a href="#">Presentes</a></li>
                    <li><a href="#">Player da web</a></li>
                </ul>
            </div>
              
              <div class="col-md-4">
                  <ul class="nav">
                    <li class="item-rede-social"><a href="#"><img src="imagens/facebook.png"></a></li>
                    <li class="item-rede-social"><a href="#"><img src="imagens/twitter.png"></a></li>
                    <li class="item-rede-social"><a href="#"><img src="imagens/instagram.png"></a></li>
                </ul>
              
              </div>
              
            
          </div><!--row-->
            <p>Developer Cristiano Borges</p>
        </div>
          
      </footer>
 
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
      <script src="bootstrap/js/wow.min.js"></script>
       <script>new WOW().init();</script>
      
      
        
      
  </body>
</html>