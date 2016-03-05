<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title><?= $pageTitle ?></title>
		<link rel="stylesheet" href="/assets/css/main.min.css" type='text/css'>
		<script src='https://code.jquery.com/jquery-2.2.1.min.js'></script>
		<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
		<script>
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

			ga('create', 'UA-1245735-40', 'auto');
			ga('send', 'pageview');
		</script>
		<meta property="fb:app_id" content="1050430195020937" />
		<meta property="og:title" content="<?= $pageTitle ?>" />
		<meta property="og:type" content="article">
		<meta property="og:site_name" content="Переіменування вулиць в місті Кіровоград в зв*язку з вимогою закону про декомунізацію" />
		<meta property="og:url" content="<?= $baseUrl ?>" />
		<?= $layoutVars['meta'] ?>	
	</head>
	<body>
		

		<header class='header'>
			<div class="header-content">
				<div class="top-header">
					<a href="/" class="logo">Rename.kr.ua</a>
					<ul class='main-menu'>
						<li <?= $this->config->route['controllerId'] == 'MainController' ? 'class="active" data-active="1"' : '' ?> >
							<a href="/">Головна</a>
						</li>
						<li <?= $this->config->route['controllerId'] == 'AboutController' ? 'class="active" data-active="1"' : '' ?>>
							<a href="/about">Про проект</a>
						</li>
						<li <?= $this->config->route['controllerId'] == 'DocsController' ?' class="active" data-active="1"' : '' ?>>
							<a href="/docs">Розробникам</a>
						</li>
					</ul>
				</div>
				<h1 class='main-title' <?= $this->config->route['controllerId'] != 'MainController' ? 'style="margin-top: 130px;"' : false; ?>>Нові назви вулиць в місті <span>Кіровоград</span></h1>
				<?php if ($this->config->route['controllerId'] == 'MainController'): ?>
					<div class="search_wrapper">
						<input type="text" name='search' placeholder='Введіть назву'>
					</div>
					<ul class='alphabet'>
						<li><a href="#" >1</a></li>
						<li><a href="#" >2</a></li>
						<li><a href="#" >3</a></li>
						<li><a href="#" >4</a></li>
						<li><a href="#" >5</a></li>
						<li><a href="#" >6</a></li>
						<li><a href="#" >9</a></li>
						<li><a href="#" >А</a></li>
						<li><a href="#" >Б</a></li>
						<li><a href="#" >В</a></li>
						<li><a href="#" >Г</a></li>
						<li><a href="#" >Д</a></li>
						<li><a href="#" >Е</a></li>
						<li><a href="#" >Ж</a></li>
						<li><a href="#" >І</a></li>
						<li><a href="#" >К</a></li>
						<li><a href="#" >Л</a></li>
						<li><a href="#" >М</a></li>
						<li><a href="#" >Н</a></li>
						<li><a href="#" >О</a></li>
						<li><a href="#" >П</a></li>
						<li><a href="#" >Р</a></li>
						<li><a href="#" >С</a></li>
						<li><a href="#" >Т</a></li>
						<li><a href="#" >У</a></li>
						<li><a href="#" >Ф</a></li>
						<li><a href="#" >Ч</a></li>
						<li><a href="#" >Ш</a></li>
						<li><a href="#" >Щ</a></li>
					</ul>
				<?php endif ?>
			</div>
		</header>
		
		<div class="content-wrapper">
			<div class="content">
				
				<?= $content ?>

			</div>

			<div class="advertisement">
				<a href="https://www.digitalocean.com/" target='__blank'>
					<img src="/assets/images/banner.gif" alt="">
				</a>
			</div>

		</div>

		


		<footer class='footer'>
			<div class="footer-content">
				<ul class="footer-menu">
					<li>
						<a href="/">Головна</a>
					</li>
					<li>
						<a href="/about">Про проект</a>
					</li>
					<li>
						<a href="/docs">Розробникам</a>
					</li>
				</ul>
				<div class="social">
					<div class="pluso" data-background="transparent" data-options="medium,round,line,horizontal,counter,theme=04" data-services="twitter,facebook"></div>
				</div>
			</div>
			<div class="underline"></div>
			<div class="footer-content">
				<div class="copyrything">
					© 2016 Rename. All Rights Reserved.
				</div>
				<div class="development-by">
					<span>Разработано в:</span>
					<a href="https://onix-systems.com" target='__blank'>
						<img src="https://onix-systems.com/img/static/onix-logo.svg" alt="Onix-Systems">
					</a>
				</div>
			</div>
		</footer>


		<script src='/assets/js/common.js'></script>
	</body>
</html>