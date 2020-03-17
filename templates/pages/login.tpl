<form method="post" action="{BASE_URL}/app/login.php">
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
  <input type="submit" class="btn btn-primary" name="submit" value="Login">
</form>