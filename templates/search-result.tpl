<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/style.css">
	

    <title>Hungry Interns</title>
  </head>
<body>

  <!-- Navigation -->
<div id="hi-menu"> 
<div class="container"> 
 <nav class="navbar navbar-expand-lg navbar-light">
  <a class="navbar-brand" href="#"><img src="../assets/img/logo.png" height="130" class="logo"/></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">  
	<ul class="navbar-nav ml-auto">
		<li class="nav-item active">
			<a class="nav-link" href="#">Sign Up <span class="sr-only">(current)</span></a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="#">Login</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="#">|</a>
		</li>
	</ul>
  </div>
</nav>
</div>
</div>
 
 
  <!-- Masthead -->
  <header class="masthead text-white text-center">
    <div class="container">
      <div class="row">
        <div class="col-xl-11 mx-auto">
          <h1 class="mb-5">A Headline Breifly Explaining What The Website Does</h1>
        </div>
        <div class="col-md-12 col-lg-10 col-xl-9 mx-auto">
          <form class="header-form" action="search.php" method="post">
            <div class="form-row">
              <div class="col-12 col-md-9 mb-2 mb-md-0 flexme">
                <input type="text" name="keyword" value="{$keyword}" class="form-control form-control-lg" placeholder="Search for a job description......">
				<input type="text" name="location" value="{$location}" class="form-control form-control-lg" placeholder="Country...">
              </div>
              <div class="col-12 col-md-3">
                <button type="submit" class="btn btn-block btn-lg btn-primary">Search</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </header>

  <!-- Icons Grid -->
  <section class="home-sec1 text-center">
    <div class="container">
		<div class="row">
			{if ($search_result['jobs']['pages'] != 0)}
				{foreach from=$search_result['jobs']['result'] item=jobs}
					<div class="col-sm-12">
						<div class="card mb-2">
							<div class="job-information card-body">
								<p class="text-left job-title"><a href="{$jobs['url']}">{$jobs['title']}</a></p>
								<p class="text-left job-company">
									<i class="fa fa-building"></i>  {($jobs['company']) ? $jobs['company'] : '..'}
								</p>
								<p class="text-left job-location"><i class="fa fa-map-marker"></i> {$jobs['location']}</p>
								<p class="text-left job-description">{$jobs['description']}</p>
								<p class="text-left job-date">{$jobs['date']}</p>
							</div>
						</div>
					</div>
				{/foreach}
			{else}
				<div class="col-sm-12">
					<h4 class="text-center text-warning">No data found</h4>
				</div>
			{/if}
			<div class="col-sm-12 text-right">
				{include file = './pagination.tpl'}
			</div>
		</div>
    </div>
  </section>

  
  

  <!-- Footer -->
  <footer class="footer">
    <div class="container">
      <div class="row ">
        <div class="col-sm-4">
			<h4 class="nav-heading">Usefull links</h4>
			<ul class="list-unstyled footer-sub-heading">
				<li><a href="">Privacy policy</a></li>
				<li><a href="">Term & conditions</a></li>
				<li><a href="">Sitemap</a></li>
			</ul>
		</div>
		<div class="col-sm-4">
			<h4 class="nav-heading">About us</h4>
			<ul class="list-unstyled footer-sub-heading">
				<li><a href="">About us</a></li>
				<li><a href="">Contact us</a></li>
			</ul>
		</div>
      </div>
	  
	  <div class="row">
        <div class="col-sm-4">
			<ul class="list-inline follow-links mb-0">
				<li class="list-inline-item">Follow us</li>
				<li class="list-inline-item fa-2x">
					<a href="#" style="color:#3061a0"><i class="fa fa-facebook"></i></a>
				</li>
				<li class="list-inline-item fa-2x">
					<a href="#" style="color:#2db3ee"><i class="fa fa-twitter"></i></a>
				</li>
				<li class="list-inline-item fa-2x" style="color:#dd4937">
					<a href="#"><i class="fa fa-google-plus"></i></a>
				</li>
			<ul>
		</div>
		<div class="col-sm-5">
		
		</div>
		<div class="col-sm-3 mb100">
			<img src="../assets/img/footer-logo.png" class="img-fluid">
		</div>
      </div>

	  <div class="row footer-bottom">
		<div class="col-sm-4">
			<span class="copyright">@ Hungry Interns 2017 - All Rights Reserved</span>
		</div>
		<div class="col-sm-5"></div>
		<div class="col-sm-3">
			<span class="copyright">Web design by Studio116</span>
		</div>
	  </div>
    </div>
  </footer>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>

  </body>
</html>