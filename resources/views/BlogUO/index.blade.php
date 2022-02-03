<!DOCTYPE HTML>
<html>
	<head>
		<title>Blog - Examen - OU</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="/css/main.css" />
	</head>
	<body class="is-preload">

		<!-- Header -->
			<div id="header">

				<div class="top">

					<!-- Logo -->
						<div id="logo">
							<span class="image avatar48"><img src="images/LogoCarrera.png" alt="150" while="" /></span>
							<h1 id="title">Temario</h1>
							<p>Por: Uriel y Osvaldo</p>
						</div>

					<!-- Nav -->
						<nav id="nav">
							<ul>
								<li><a href="#top" id="top-link"><span class="icon solid fa-home">Principal</span></a></li>
								<li><a href="#portfolio" id="portfolio-link"><span class="icon solid fa-th">Temas</span></a></li>
							</ul>
						</nav>

				</div>

				<div class="bottom">

					<!-- Social Icons -->
						<ul class="icons">
							<li><a href="https://www.facebook.com/UrielAR08/" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
							<li><a href="https://www.facebook.com/osvaldo.avilesguzman.3" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
								
						</ul>

				</div>

			</div>

		<!-- Main -->
			<div id="main">

				<!-- Intro -->
					<section id="top" class="one dark cover">
						<div class="container">

							<header>
								<h2 class="alt">Hola <strong>Este es nuestro blog</strong><br /></h2>
								<p>Les presentamos nuestro blog, este tiene como proposito la evaluación de la Unidad 1 de la materia de Programacion Cliente Servidor</p>
							</header>

							<footer>
								<a href="#portfolio" class="button scrolly">Ir a temario</a>
							</footer>
						</div>
					</section>

				<!-- Portfolio -->
					<section id="portfolio" class="two">
						<div class="container">

							<header>
								<h2>Temario</h2>
							</header>

							<p>A continuacion dejamos los temas de la unidad: 
								<br>Nota: Para acceder a la información, da clik sobre la imagen.</br>
							</p>

							<div class="row">
								<div class="col-4 col-12-mobile">
									<article class="item">
										<a href="{{route('tema1')}}" class="image fit"><img src="images/CSI.jpg" alt="" /></a>
										<header>
											<h3>T1: Conceptos de sistemas de información</h3>
										</header>
									</article>
									<article class="item">
										<a href="{{route('tema2')}}" class="image fit"><img src="images/ELSI.png" alt="" /></a>
										<header>
											<h3>T2: Evolución de los sistemas de información</h3>
										</header>
									</article>
								</div>
								<div class="col-4 col-12-mobile">
									<article class="item">
										<a href="{{route('tema3')}}" class="image fit"><img src="images/CDCS.png" alt="" /></a>
										<header>
											<h3>T3: Conceptos de cliente servidor</h3>
										</header>
									</article>
									<article class="item">
										<a href="{{route('tema4')}}" class="image fit"><img src="images/SCCD.jpg" alt="" /></a>
										<header>
											<h3>T4: Sistemas de computadoras centrales y dedicadas</h3>
										</header>
									</article>
								</div>
								<div class="col-4 col-12-mobile">
									<article class="item">
										<a href="{{route('tema5')}}" class="image fit"><img src="images/SCLAR.jpg" alt="" /></a>
										<header>
											<h3>T5: Sistemas de conexión libre y a través de redes</h3>
										</header>
									</article>
									<article class="item">
										<a href="{{route('tema6')}}" class="image fit"><img src="images/SACS.jpg" alt="" /></a>
										<header>
											<h3>T6: Sistemas con arquitectura Cliente/Servidor</h3>
										</header>
									</article>
								</div>
								<div class="col-4 col-12-mobile">
									<article class="item">
										<a href="{{route('tema7')}}" class="image fit"><img src="images/PCR.jpg" alt="" /></a>
										<header>
											<h3>T7: Protocolos de comunicación en red</h3>
										</header>
									</article>
									<article class="item">
										<a href="{{route('tema8')}}" class="image fit"><img src="images/SIAA.png" alt="" /></a>
										<header>
											<h3>T8: Sistemas de información de acuerdo a su arquitectura</h3>
										</header>
									</article>
								</div>
								<div class="col-4 col-12-mobile">
									<article class="item">
										<a href="{{route('tema9')}}" class="image fit"><img src="images/PDCACS.png" alt="" /></a>
										<header>
											<h3>T9: Proceso de diagramación de componentes de la arquitectura Cliente/Servidor</h3>
										</header>
									</article>
								</div>
							</div>

						</div>
					</section>
			</div>

		<!-- Footer -->
			<div id="footer">

				<!-- Copyright -->
					<ul class="copyright">
						<li>&copy; Esta pagina es meramente escolar</li><li>Esta pagina está protegida por derechos de autor, si se la roban lo sabremos</a></li>
					</ul>

			</div>

		<!-- Scripts -->
			<script src="/js/jquery.min.js"></script>
			<script src="/js/jquery.scrolly.min.js"></script>
			<script src="/js/jquery.scrollex.min.js"></script>
			<script src="/js/browser.min.js"></script>
			<script src="/js/breakpoints.min.js"></script>
			<script src="/js/util.js"></script>
			<script src="/js/main.js"></script>

	</body>
</html>