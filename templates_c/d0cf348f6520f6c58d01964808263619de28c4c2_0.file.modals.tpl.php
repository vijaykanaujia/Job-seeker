<?php
/* Smarty version 3.1.34-dev-7, created on 2020-03-23 06:07:19
  from 'F:\htdocs\core-php-boilerplate\templates\components\modals.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e7844077de542_20872740',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd0cf348f6520f6c58d01964808263619de28c4c2' => 
    array (
      0 => 'F:\\htdocs\\core-php-boilerplate\\templates\\components\\modals.tpl',
      1 => 1584688610,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e7844077de542_20872740 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="guestSearchRestrictionModal" class="modal fade" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <br><br><br>
      <div class="modal-body p-5 text-center">
        <p class="fa-2x">Please <a href="<?php echo BASE_URL;?>
/app/registration.php#registration">register</a> or <a href="<?php echo BASE_URL;?>
/app/login.php#login">login</a> to continue search.</p>
      </div>
      <br><br><br>
    </div>
  </div>
</div>
<?php echo '<script'; ?>
>
	function isSearch(){
		let status = true;
		$.ajax({
	        url: "<?php echo BASE_URL;?>
/app/ajax/guestSearchRestriction.php",
	        cache: false,   
	        type: 'GET', 
	        async:false,
	        success: function(response){
	         	if(response == "open"){
	         		$('#guestSearchRestrictionModal').modal('show');
	         		status = false;
	         	}
	        },
	        error: function(error){
	          alert('Something went wrong !');
	          status = false;
	        }
	      });
		if (status){
			$('form#job_search_form').submit();
		}


	}
<?php echo '</script'; ?>
><?php }
}
