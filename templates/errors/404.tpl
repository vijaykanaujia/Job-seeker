<!doctype html>
<html lang="en">
	<head>
		<!-- ====== header component ====== -->
		{include file = "../components/header.tpl"}
	</head>
	<body>

		<!-- Navigation -->
		<div id="hi-menu"> 
		<div class="container"> 
		 <nav class="navbar navbar-expand-lg navbar-light">
		  <a class="navbar-brand" href="{BASE_URL}"><img src="{ASSETS_URL}/img/logo.png" height="130" class="logo"/></a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>

		  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">  
			<ul class="navbar-nav ml-auto">
			
			</ul>
		  </div>
		</nav>
		</div>
		</div>

		<!-- all pages include heare -->
		<section class="home-sec1" id="{(isset($page)) ? $page : 'home'}">
			<div class="container">
				<h2 class="text-danger text-center">Page not found !</h2>
				<h3 class="text-center"><a href="{HOME_URL}">go to home</a></h3>
			</div>
		</section>
	  
	  	<!-- ====== footer component ====== -->
		{include file = "../components/footer.tpl"}

		<!-- ====== modals component ====== -->
		{include file = "../components/modals.tpl"}

  	</body>
</html>