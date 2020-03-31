 <!-- Navigation -->
<div id="hi-menu"> 
<div class="container"> 
 <nav class="navbar navbar-expand-lg navbar-light">
  <a class="navbar-brand" href="{HOME_URL}"><img src="{ASSETS_URL}/img/logo.png" height="130" class="logo"/></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">  
	<ul class="navbar-nav ml-auto">
		<li class="nav-item active">
			<a class="nav-link" href="{BASE_URL}/app/admin/add-university.php">Add University</a>
		</li>
		<li class="nav-item active">
			<a class="nav-link" href="{BASE_URL}/app/admin/manage-university.php">Manage  University</a>
		</li>
		<li class="nav-item active">
			<a class="nav-link" href="{BASE_URL}/app/admin/add-student.php">Add Student</a>
		</li>
		<li class="nav-item active">
			<a class="nav-link" href="{BASE_URL}/app/admin/manage-student.php">Manage  Student</a>
		</li>
		<li class="nav-item">
			{if $user->isLoggedIn()}
				<a class="nav-link" href="{BASE_URL}/app/logout.php">Logout</a>
			{else}
				<a class="nav-link" href="{BASE_URL}/app/login.php#login">Login</a>
			{/if}
		</li>
		<li class="nav-item">
			<a class="nav-link" title="Admin panel" href="javascript:void(0)">| &nbsp;&nbsp;Admin</a>
		</li>
	</ul>
  </div>
</nav>
</div>
</div>