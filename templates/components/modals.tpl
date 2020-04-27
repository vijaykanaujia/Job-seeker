<div id="guestSearchRestrictionModal" class="modal fade" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
      	<img style="width: 100px" src="{ASSETS_URL}/img/logo.png" class="img-fluid">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <br><br><br>
      <div class="modal-body p-5 text-center">
        <p style="font-size: 24px;">To access our full jobs database please <a href="javascript:void(0)" onclick="getSignInModal()" class="btn btn-sm btn-danger">sign-in</a> or <a href="javascript:void(0)" class="btn btn-sm btn-danger" onclick="getSignUpModal()">register</a> (It's FREE)</p>
      </div>
      <br><br><br>
    </div>
  </div>
</div>

<div id="login_modal" class="modal fade" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
      	<img style="width: 100px" src="{ASSETS_URL}/img/logo.png" class="img-fluid">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="javascript:void(0)" id="sign_in_form">
		  <div class="form-group">
		    <label for="email">Email <span class="text-danger pull-right">*</span></label>
		    <input type="email" class="form-control" id="email" name="email" value="">
		    <span class="text-danger" id="email_error"></span>
		  </div>
		  <div class="form-group">
		    <label for="password">Password <span class="text-danger pull-right">*</span></label>
		    <input type="password" class="form-control" id="password" name="password">
		    <span class="text-danger" id="password_error"></span>
		  </div>
		  <input type="submit" class="btn btn-primary" name="submit" value="Login"> <button type="button" class="btn btn-link text-danger" onclick="javascript:$('form#forgot_password_form').show();">Forgot password</button>

		</form>

		<form method="post" action="javascript:void(0)" id="forgot_password_form" class="hide">
			<hr>
		  <div class="form-group">
		    <label for="register_email">Register Email <span class="text-danger pull-right">*</span></label>
		    <input type="email" class="form-control" id="register_email" name="register_email" value="">
		    <span class="text-danger" id="register_email_error"></span>
		  </div>
		  <div class="form-group">
		    <label for="new_password">New password <span class="text-danger pull-right">*</span></label>
		    <input type="password" class="form-control" id="new_password" name="new_password">
		    <span class="text-danger" id="new_password_error"></span>
		  </div>
		  <div class="form-group">
		    <label for="confirm_password">Confirm password <span class="text-danger pull-right">*</span></label>
		    <input type="password" class="form-control" id="confirm_password" name="confirm_password">
		    <span class="text-danger" id="confirm_password_error"></span>
		  </div>
		  <input type="submit" class="btn btn-primary" name="submit" value="Reset password">
		  <button type="button" class="btn btn-warning" onclick="javascript:$(this).closest('form').hide();">Close</button>
		</form>
    </div>
  </div>
</div>
</div>

<div id="sign_up_modal" class="modal fade" tabindex="-1" role="dialog">
  	<div class="modal-dialog modal-lg" role="document">
    	<div class="modal-content">
	      	<div class="modal-header">
	      		<img style="width: 100px" src="{ASSETS_URL}/img/logo.png" class="img-fluid">
	        	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          		<span aria-hidden="true">&times;</span>
	        	</button>
	      	</div>
	      	<div class="modal-body">
	        	<form method="post" action="javascript:void(0)" id="sign_up_form">
				  <div class="form-group">
				    <label for="first_name">First name <span class="text-danger pull-right">*</span></label>
				    <input type="text" class="form-control" id="first_name"  name="first_name">
				    <span class="text-danger" id="first_name_error"></span>
				  </div>
				  <div class="form-group">
				    <label for="last_name">Last name</label>
				    <input type="text" class="form-control" id="last_name"  name="last_name">
				  </div>
				  <div class="form-group">
				    <label for="university_email">University/College email address &nbsp; 
				    	<i class="fa fa-question-circle" data-toggle="tooltip" data-placement="right" title="Access to our website is only available if your university/college has a subscription with us, therefore we need to verify you are a student of this university/college"></i>
				    	&nbsp;<span class="text-danger pull-right">*</span>
				    </label>
				    <input type="email" class="form-control" id="university_email" name="university_email">
				    <span class="text-danger" id="university_email_error"></span>
				  </div>
				  <div class="form-group">
				    <label for="signup_password">Password <span class="text-danger pull-right">*</span></label>
				    <input type="password" class="form-control" id="signup_password" name="signup_password">
				    <span class="text-danger" id="signup_password_error"></span>
				  </div>
				  <input type="submit" class="btn btn-primary" name="submit" value="Register">
				</form>
	    	</div>
    	</div>
  	</div>
</div>