<form method="post" action="{BASE_URL}/app/admin/add-student.php">
  <div class="form-group">
      <label for="university_id">University<span class="text-danger pull-right">*</span></label>
      <select class="form-control" id="university_id"  name="university_id">
        {if isset($university_id)}
          <option value="{$university_id}" selected>{$university_id}</option>
        {/if}
      </select>
      {if isset($university_id_error)}<span class="text-danger">{$university_id_error}</span>{/if}
  </div>
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

<script>
  var uni_id = "{(isset($university_id)) ? $university_id : ''}";
  $(function(){
      $('#university_id').change(function(){
        localStorage.setItem('university_email', $(this).find(':selected').text())
      });
      if(uni_id){
        $('#university_id').find(':selected').text(localStorage.getItem('university_email'));
        $('#university_id').select2().trigger("change");
      }
  });
</script>