<form method="post" action="{BASE_URL}/app/registration.php">
  <div class="form-group">
    <label for="first_name">First name <span class="text-danger pull-right">*</span></label>
    <input type="text" class="form-control" id="first_name"  name="first_name" value="{(isset($first_name)) ? $first_name : ''}">
    {if isset($first_name_error)}<span class="text-danger">{$first_name_error}</span>{/if}
  </div>
  <div class="form-group">
    <label for="last_name">Last name</label>
    <input type="text" class="form-control" id="last_name"  name="last_name" value="{(isset($last_name)) ? $last_name : ''}">
  </div>
  <div class="form-group">
    <label for="email">Email <span class="text-danger pull-right">*</span></label>
    <input type="email" class="form-control" id="email" name="email" value="{(isset($email)) ? $email : ''}">
    {if isset($email_error)}<span class="text-danger">{$email_error}</span>{/if}
  </div>
  <div class="form-group">
    <label for="password">Password <span class="text-danger pull-right">*</span></label>
    <input type="password" class="form-control" id="password" name="password">
    {if isset($password_error)}<span class="text-danger">{$password_error}</span>{/if}
  </div>
  <input type="submit" class="btn btn-primary" name="submit" value="Submit">
</form>