<?php
/* Smarty version 3.1.34-dev-7, created on 2020-03-12 19:57:40
  from 'F:\htdocs\core-php-boilerplate\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e6a86240d37d1_85914265',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '444730d8fcdf1bb2497742f75d6af91eb2b42a4b' => 
    array (
      0 => 'F:\\htdocs\\core-php-boilerplate\\templates\\index.tpl',
      1 => 1584039457,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e6a86240d37d1_85914265 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/style.css">
	

    <title>Hungry Interns</title>
  </head>
<body>

  <!-- Navigation -->

<div id="hi-menu"> 
<div class="container"> 
 <nav class="navbar navbar-expand-lg navbar-light">
  <a class="navbar-brand" href="#"><img src="./assets/img/logo.png" height="130" class="logo"/></a>
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
          <form class="header-form" action="#" method="post">
            <div class="form-row">
              <div class="col-12 col-md-9 mb-2 mb-md-0 flexme">
                <input type="text" name="keyword" class="form-control form-control-lg" placeholder="Search for a job description......">
				<input type="text" name="location" class="form-control form-control-lg" placeholder="Country...">
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
			<div class="col-lg-12">
			  <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
			    <div class="features-icons-icon d-flex">
			      <i class="icon-layers m-auto text-primary"></i>
			    </div>
			    <h2>What We Do</h2>
			  </div>
			</div>		
		</div>

      	<div class="row">
			<div class="col-sm-6">
				<div class="card">
					<div class="card-heading">
						
					</div>
					<div class="card-body">
						<div class="table-responsive">
							<table class="table table-interns">
								<thead>
									<tr>
										<td colspan="7" class="border-top-0">
											<div class="row">
												<div class="col-sm-6">
													<p class="mb-0 potentail-info"><i class="fa fa-user fa-2x"></i> &nbsp;&nbsp; we have <span class="text-info fa-2x">000</span> potential interns for you</p>
												</div>
												<div class="col-sm-6">
													<ul class="list-inline pull-right">
														<li class="list-inline-item">
															<i class="fa fa-list"></i>
														</li>
														<li class="list-inline-item">
														<i class="fa fa-th"></i>
														</li>
														<li class="list-inline-item">Sort by : </li>
														<li class="list-inline-item">
															<select class="form-control" name="" id="">
																<option value="">Relevance</option>
															</select>
														</li>
													</ul>
												</div>
											</div>
										</td>
									</tr>
									<tr>
										<th class="border-bottom-0"></th>
										<th class="border-bottom-0">NAME</th>
										<th class="border-bottom-0">SKILLS</th>
										<th class="border-bottom-0">AVAILABLE FROM</th>
										<th class="border-bottom-0">AVAILABLE TO</th>
										<th class="border-bottom-0">LOCATION</th>
										<th class="border-bottom-0">CONTACT</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>
											<img src="./assets/img/profile.jpg" class="profile-image"></td>
										<td>Demo</td>
										<td>Web design,Writer,Speaker</td>
										<td>FEB 2020</td>
										<td>APR 2020</td>
										<td>India,Nepal</td>
										<td><button type="button" class="btn btn-sm btn-info btn-size">Contact</button></td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-6">
				<h3 class="text-info text-left">Unique student search system</h2>
				<p class="text-left">Employee can use our unique student search facility to browse  our large and growing database of student.</p>
				<h3 class="text-info text-left">Search using at least 3 parameters</h2>
				<p class="text-left">The more boxses you tick the narrow your search becomes and this should assis with finding the most suitable candidate quickly.</p>
			</div>
		</div>

		<div class="row">
			<?php if (count($_smarty_tpl->tpl_vars['search_result']->value['jobs']) != 0) {?>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['search_result']->value['jobs']['result'], 'jobs');
$_smarty_tpl->tpl_vars['jobs']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['jobs']->value) {
$_smarty_tpl->tpl_vars['jobs']->do_else = false;
?>
					<div class="col-sm-12">
						<div class="card mb-2">
							<div class="job-information card-body">
								<p class="text-left job-title"><a href="<?php echo $_smarty_tpl->tpl_vars['jobs']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['jobs']->value['title'];?>
</a></p>
								<p class="text-left job-company">
									<i class="fa fa-building"></i>  <?php echo $_smarty_tpl->tpl_vars['jobs']->value['company'] ? $_smarty_tpl->tpl_vars['jobs']->value['company'] : '..';?>

								</p>
								<p class="text-left job-location"><i class="fa fa-map-marker"></i> <?php echo $_smarty_tpl->tpl_vars['jobs']->value['location'];?>
</p>
								<p class="text-left job-description"><?php echo $_smarty_tpl->tpl_vars['jobs']->value['description'];?>
</p>
								<p class="text-left job-date"><?php echo $_smarty_tpl->tpl_vars['jobs']->value['date'];?>
</p>
							</div>
						</div>
					</div>
				<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			<?php } else { ?>
				<div class="col-sm-12">
					<h4 class="text-center text-warning">No data found</h4>
				</div>
			<?php }?>
			<div class="col-sm-12"></div>
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
			<img src="./assets/img/footer-logo.png" class="img-fluid">
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


    <?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="./assets/js/bootstrap.min.js"><?php echo '</script'; ?>
>
  </body>
</html><?php }
}
