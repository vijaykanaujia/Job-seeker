<h2 class="mb-5">Add University</h2>
<form method="post" action="{BASE_URL}/app/admin/add-university.php">
  <div class="form-group">
    <label for="name">Name of university <span class="text-danger pull-right">*</span></label>
    <input type="text" class="form-control" id="name"  name="name" value="{(isset($name)) ? $name : ''}">
    {if isset($name_error)}<span class="text-danger">{$name_error}</span>{/if}
  </div>
  <div class="form-group">
    <label for="email">University email <span class="text-danger pull-right">*</span></label>
    <input type="email" class="form-control" id="email" name="email" value="{(isset($email)) ? $email : ''}">
    {if isset($email_error)}<span class="text-danger">{$email_error}</span>{/if}
  </div>
  <input type="submit" class="btn btn-primary" name="submit" value="Submit">
</form>