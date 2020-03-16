<!doctype html>
<html lang="en">
	<head>
		<!-- ====== header component ====== -->
		{include file = "./components/header.tpl"}
	</head>
	<body>

		<!-- ======== navbar component ======= -->
		{include file = "./components/navbar.tpl"}
		
		<!-- ====== search-head component ======= -->
		{include file = "./components/search-head.tpl"}

		<!-- all pages include heare -->
		<section class="home-sec1" id="{(isset($page)) ? $page : 'home'}">
			<div class="container">
				<!-- action message component-->
				{include file = "./components/action-message.tpl"}
				{if isset($page)}
					{include file = "./pages/"|cat:$page|cat:".tpl"}
				{else}
					<h1 class="text-danger text-center"> Page Not Found </h1>
				{/if}
			</div>
		</section>
	  
	  	<!-- ====== footer component ====== -->
		{include file = "./components/footer.tpl"}

  	</body>
</html>