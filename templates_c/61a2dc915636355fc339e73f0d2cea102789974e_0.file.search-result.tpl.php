<?php
/* Smarty version 3.1.34-dev-7, created on 2020-03-13 11:55:05
  from 'E:\htdocs\core-php-boilerplate\templates\search-result.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e6b668943d521_79859369',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '61a2dc915636355fc339e73f0d2cea102789974e' => 
    array (
      0 => 'E:\\htdocs\\core-php-boilerplate\\templates\\search-result.tpl',
      1 => 1584086879,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./pagination.tpl' => 1,
  ),
),false)) {
function content_5e6b668943d521_79859369 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
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
                <input type="text" name="keyword" value="<?php echo $_smarty_tpl->tpl_vars['keyword']->value;?>
" class="form-control form-control-lg" placeholder="Search for a job description......">
				<input type="text" name="location" value="<?php echo $_smarty_tpl->tpl_vars['location']->value;?>
" class="form-control form-control-lg" placeholder="Country...">
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
			<?php if (($_smarty_tpl->tpl_vars['search_result']->value['jobs']['pages'] != 0)) {?>
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
			<div class="col-sm-12 text-right">
				<?php $_smarty_tpl->_subTemplateRender('file:./pagination.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
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


    <?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="../assets/js/bootstrap.min.js"><?php echo '</script'; ?>
>

  </body>
</html><?php }
}
