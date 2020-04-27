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
		<li class="nav-item active">
			<a class="nav-link sign-up-button" href="javascript:void(0)" onclick="getSignUpModal()">Sign Up <span class="sr-only">(current)</span></a>
		</li>
		<li class="nav-item">
			{if $user->isLoggedIn()}
				<a class="nav-link" href="{BASE_URL}/app/logout.php">Logout</a>
			{else}
				<a class="nav-link" href="javascript:void(0)" onclick="getSignInModal()">Login</a>
			{/if}
		</li>
		<li class="nav-item">
			<a class="nav-link" href="#">|</a>
		</li>
		<li class="nav-item"><a class="nav-link" href="{BASE_URL}/app/about-us.php">About us</a></li>
	</ul>
  </div>
</nav>
</div>
</div>