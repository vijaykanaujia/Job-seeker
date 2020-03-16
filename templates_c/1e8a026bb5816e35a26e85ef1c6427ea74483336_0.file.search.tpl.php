<?php
/* Smarty version 3.1.34-dev-7, created on 2020-03-14 09:36:24
  from 'F:\htdocs\core-php-boilerplate\templates\pages\search.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e6c9788e70773_51688165',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1e8a026bb5816e35a26e85ef1c6427ea74483336' => 
    array (
      0 => 'F:\\htdocs\\core-php-boilerplate\\templates\\pages\\search.tpl',
      1 => 1584173316,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../components/pagination.tpl' => 1,
  ),
),false)) {
function content_5e6c9788e70773_51688165 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="row">
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
		<?php $_smarty_tpl->_subTemplateRender('file:../components/pagination.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
	</div>
</div><?php }
}
