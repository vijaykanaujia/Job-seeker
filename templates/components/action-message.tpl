
{if isset($success)}
<div class="alert alert-success alert-dismissible fade show" role="alert">
  {$success}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
{/if}
{if isset($danger)}
<div class="alert alert-danger alert-dismissible fade show" role="alert">
  {$danger}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
{/if}