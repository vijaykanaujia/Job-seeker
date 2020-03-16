<?php
/* Smarty version 3.1.34-dev-7, created on 2020-03-15 12:07:34
  from 'F:\htdocs\core-php-boilerplate\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e6e0c76700245_21077594',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '444730d8fcdf1bb2497742f75d6af91eb2b42a4b' => 
    array (
      0 => 'F:\\htdocs\\core-php-boilerplate\\templates\\index.tpl',
      1 => 1584270452,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./components/header.tpl' => 1,
    'file:./components/navbar.tpl' => 1,
    'file:./components/search-head.tpl' => 1,
    'file:./components/action-message.tpl' => 1,
    'file:./components/footer.tpl' => 1,
  ),
),false)) {
function content_5e6e0c76700245_21077594 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html lang="en">
	<head>
		<!-- ====== header component ====== -->
		<?php $_smarty_tpl->_subTemplateRender("file:./components/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
	</head>
	<body>

		<!-- ======== navbar component ======= -->
		<?php $_smarty_tpl->_subTemplateRender("file:./components/navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
		
		<!-- ====== search-head component ======= -->
		<?php $_smarty_tpl->_subTemplateRender("file:./components/search-head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

		<!-- all pages include heare -->
		<section class="home-sec1" id="<?php echo isset($_smarty_tpl->tpl_vars['page']->value) ? $_smarty_tpl->tpl_vars['page']->value : 'body_section';?>
">
			<div class="container">
				<!-- action message component-->
				<?php $_smarty_tpl->_subTemplateRender("file:./components/action-message.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
				<?php if (isset($_smarty_tpl->tpl_vars['page']->value)) {?>
					<?php $_smarty_tpl->_subTemplateRender((("./pages/").($_smarty_tpl->tpl_vars['page']->value)).(".tpl"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
				<?php } else { ?>
					<h1 class="text-danger text-center"> Page Not Found </h1>
				<?php }?>
			</div>
		</section>
	  
	  	<!-- ====== footer component ====== -->
		<?php $_smarty_tpl->_subTemplateRender("file:./components/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

  	</body>
</html><?php }
}
