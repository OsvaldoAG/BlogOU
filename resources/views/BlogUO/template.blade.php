<!DOCTYPE HTML>
<html>
	<head>
		<title>@yield('titulo') </title>
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
							<h1 id="title">@yield('titulo') </h1>
							<p>Por: Uriel y Osvaldo</p>
						</div>

					<!-- Nav -->
						<nav id="nav">
							<ul>
								<li><a href="{{route('inicio')}}" id="top-link"><span class="icon solid fa-home">Principal</span></a></li>
								<li><a href="{{route('inicio')}}" id="portfolio-link"><span class="icon solid fa-th">Temas</span></a></li>
								<li><a href="{{route('tema1')}}" id="about-link"><span class="icon solid fa-user">Tema 1</span></a></li>
								<li><a href="{{route('tema2')}}" id="about-link"><span class="icon solid fa-user">Tema 2</span></a></li>
								<li><a href="{{route('tema3')}}" id="about-link"><span class="icon solid fa-user">Tema 3</span></a></li>
								<li><a href="{{route('tema4')}}" id="about-link"><span class="icon solid fa-user">Tema 4</span></a></li>
								<li><a href="{{route('tema5')}}" id="about-link"><span class="icon solid fa-user">Tema 5</span></a></li>
								<li><a href="{{route('tema6')}}" id="about-link"><span class="icon solid fa-user">Tema 6</span></a></li>
								<li><a href="{{route('tema7')}}" id="about-link"><span class="icon solid fa-user">Tema 7</span></a></li>
								<li><a href="{{route('tema8')}}" id="about-link"><span class="icon solid fa-user">Tema 8</span></a></li>
								<li><a href="{{route('tema9')}}" id="about-link"><span class="icon solid fa-user">Tema 9</span></a></li>
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
								<h2 class="alt">@yield('tema')<strong>@yield('tematitulo')</strong><br /></h2>
								<p>@yield('introduccion')</p>
                                <a href="@yield('enlace1')" class="image fit"><img src="@yield('imagentema')" alt="" /></a>
                            </header>
						</div>
					</section>

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