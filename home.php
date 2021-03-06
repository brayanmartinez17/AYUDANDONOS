<?php
session_start();
if(!isset($_SESSION["user_id"]) || $_SESSION["user_id"]==null){
	print "<script>alert(\"Acceso invalido!\");window.location='login.php';</script>";
}

?>
<html>
	<head>
		<title>.: HOME :.</title>
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
		<meta charset="utf-8">
	<meta name="viewport">
	<meta name="description">
	<meta name="keyword" >
	<meta name="description" content="Render">
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
	<link rel="stylesheet" type="text/css" href="css/loaders.css">
	 <link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="css/estilos.css">
  <link rel="stylesheet" type="text/css" href="css/font-awesome.css">
  <script src="js/jquery-3.1.0.min.js"></script>
  <script src="js/main.js"></script>
  	<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script type="text/javascript">
      jQuery(window).on('load',function(){
        jQuery('.loader-box').fadeOut();
      })
    </script>
	</head>
	
	<body>
	<?php include "php/navbar.php"; ?>
	 <!-- MAIN WRAPPER -->
  <div id="wrapper">

    <!-- BANNER WRAPPER -->
    <div id="banner-wrapper">
      <header>
            <div id="burger-menu">
        <span></span>
    </div>

    <div id="menu">
        <ul>
            <li><a href="index.html">Inicio</a></li>
            <li><a href="clinicas.html">Clinicas</a></li>
            <li><a href="ancianatos.html">Ancianatos</a></li>
            <li><a href="psquiatria.html">psiquiatra</a></li>
            <li><a href="cai.html">Cai</a></li>
        </ul>
    </div>

<script src="js/script.js"></script>
      </header>
      <!-- SLIDER -->
  <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    
    
    <div class="carousel-item">
      <img class="d-block w-100" src="solidarios.gif" alt="Third slide">
    </div>
  </div>
</div>

 <!-------------------------------------------------------->
    <ol class="pagination">
      
    </ol>
  
    <div class="left">
      <span class="fa fa-chevron-left"></span>
    </div>

    <div class="right">
      <span class="fa fa-chevron-right"></span>
    </div>

  </div>
    <!-- ICONS -->

    <section class="one-third" id="skills">
      <div class="icon-wrap">
         <svg id="Capa_1" enable-background="new 0 0 20 30" height="20" viewBox="0 0 30 20" width="30" xmlns="http://www.w3.org/2000/svg"><g><g><path d="m234.077 71.203c-53.548-53.548-140.367-53.548-193.916 0-53.548 53.548-53.548 140.367 0 193.916l21.923 21.923 193.916 193.916 14.226-215.261-14.226-172.571z" fill="#e06379"/><g><path d="m471.839 71.204c-53.549-53.549-140.368-53.549-193.916 0l-21.923 21.922v387.832l193.916-193.916 21.923-21.923c53.548-53.548 53.548-140.367 0-193.915z" fill="#c63c50"/></g></g><g><path d="m201.256 262.774c-21.556 21.556-21.556 56.506 0 78.063 14.819 14.819 35.968 19.451 54.744 13.895l13.115-72.215-13.115-74.487z" fill="#f6dccd"/><path d="m423.528 118.564c-21.557-21.556-56.506-21.556-78.063 0l-89.465 89.466v146.702c8.536-2.526 16.581-7.157 23.319-13.895l144.21-144.21c21.556-21.556 21.556-56.506-.001-78.063z" fill="#f1cbbc"/></g><g><path d="m234.329 229.7 21.671 21.671 11.259-21.67-11.259-21.671z" fill="#eebca8"/><path d="m390.455 229.7-78.063-78.062-56.392 56.392v43.341l56.392 56.392z" fill="#e9a48c"/></g></g></svg>
              </div>
      <h3>¿por que es importante donar?</h3>
      <p>Las donaciones constituyen un elemento fundamental en muchos proyectos, sobre todo si los recursos asignados para ellos o las contribuciones institucionales no logran cubrir las necesidades que los han impulsado.

Una donación es una aportación, generalmente particular, que busca dar impulso a iniciativas de cualquier tipo. Quienes la realizan entienden la importancia de las labores que se prestan y por eso deciden donar dinero. Entre las razones más significativas para realizar este tipo de acciones destacan las dos siguientes:.</p>
    </section>
    <section class="one-third">
      <div class="icon-wrap">
        <i class="fa fa-pencil-square-o"></i>
      </div>
      <h3>Donde se puede donar</h3>
      <p>Como incentivo y exaltación de todas aquellas personas o asociaciones comprometidas con la donación de órganos y tejidos en la ciudad, la Secretaría Distrital de Salud junto con el Concejo de Bogotá, crearon el Acuerdo 369, Orden “Responsabilidad Social DONA BOGOTA”, como reconocimiento</p>
    </section>
    <section class="one-third">
      <div class="icon-wrap">
        <i class="fa fa-file-code-o"></i>
      </div>
      <h3>Violencia intra familiar?</h3>
      <p>La violencia intrafamiliar (llamada también violencia doméstica) es la ejercida entre los miembros de una misma familia, produciendo algún tipo de daño físico o psíquico en la víctima. Se refiere al ejercicio de la violencia en el seno de una familia. Generalmente por vergüenza o temor esta situación no es denunciada ante las autoridades competentes.</p>
    </section>

    <div class="clearfix-padding"></div>
    <!-- LEFT COL -->
    <section class="left-col" id="portfolio">
      <h3>Escisofrenia</h3>
      <p>La esquizofrenia es un trastorno mental crónico y grave caracterizado por alteraciones del pensamiento, la percepción de la realidad y el comportamiento. Los pacientes pueden perder el contacto con la realidad (psicosis), sufrir alucinaciones, delirios (creencias falsas), tener pensamientos anormales y problemas en el funcionamiento social y laboral.

Etimológicamente significa "mente escindida". Con este término se quería subrayar las alteraciones en el pensamiento que presentan las personas que la padecen..</p>
    </section>
    <section class="sidebar">
      <img src="esqui.gif">
    </section>

    <div class="clearfix-padding"></div>
    <!-- INFO THUMBNAILS -->
    <div class="one-third-padding" id="services">
      <h3>Pensar mejor te hace mojor persona</h3>
      <img src="gente.gif" alt="">
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis assumenda provident recusandae deserunt aperiam laboriosam distinctio sed itaque quas maxime!</p>
    </div>
    <div class="one-third-padding">
      <h3>Aborto</h3>
      <img src="aborto.gif" alt="">
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis assumenda provident recusandae deserunt aperiam laboriosam distinctio sed itaque quas maxime!</p>
    </div>
    <div class="one-third-padding">
      <h3>Pensamientos suicidas</h3>
      <img src="depresion.gif" alt="">
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis assumenda provident recusandae deserunt aperiam laboriosam distinctio sed itaque quas maxime!</p>
    </div>
  </div>

    <div class="container-redes">

        <a href="https://api.whatsapp.com/send?phone=3502826449&text=¿Hola como esta?" target="_blank">

            <img src="icon/icon-whatsapp.png" title="Enviar mensaje de WhatsApp" alt="">

        </a>

        <a href="http://m.me/themagtimus" target="_blank">

            <img src="icon/icon-messenger.png" alt="" title="Enviar mensaje por Messenger">

        </a>

    </div>

  <div class="clearfix-padding"></div>
  <!-- FOOTER -->
  <footer>
    <div class="banner-wrapper">
      <div class="icon-text">
        <div class="icon-text-icon">
          <ul class="footer-nav">
            <li>
              <a href="index.html">Home</a>
            </li>
            <li>
              <a href="#">Skills</a>
            </li>
            <li>
              <a href="#">Portfolio</a>
            </li>
            <li>
              <a href="#">Our Team</a>
            </li>
            <li>
              <a href="#">Contact</a>
            </li>
          </ul>
        </div>
        <div class="icon-text-text">
          <ul class="social">
            <li>
              <a href="mailto:contact@faztweb.com">
                <i class="fa fa-envelope-o"></i>
              </a>
            </li>
            <li>
              <a href="http://facebook.com/fazttech">
                <i class="fa fa-facebook"></i>
              </a>
            </li>
            <li>
              <a href="http://twitter.com/fazttech">
                <i class="fa fa-twitter"></i>
              </a>
            </li>
            <li>
              <a href="http://youtube.com/fazttech">
                <i class="fa fa-youtube"></i>
              </a>
            </li>
            <li>
              <a href="#">
                <i class="fa fa-instagram"></i>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </footer>
  <footer class="second-footer">
    <p>
      &copy; <a href="http://faztweb.com">FaztWeb.com</a>
    </p>
  </footer>

  <!-- SCRIPTS -->
  <script>
    $(document).ready(function(){
      $('.slider1').bxSlider({
        mode: 'fade',
      });
      $('.slider2').bxSlider({
        mode: 'fade',
      });
      $('.slider3').bxSlider({
        mode: 'fade',
      });
    });
  </script>

	</body>
</html>