
{if isset($success)}
<div class="alert alert-success alert-dismissible fade show" role="alert" style="position: fixed;
    bottom: 0;
    width: 80%;
    z-index: 999;">
  {$success}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
{/if}
{if isset($danger)}
<div class="alert alert-danger alert-dismissible fade show" role="alert" style="position: fixed;
    bottom: 0;
    width: 80%;
    z-index: 999;">
  {$danger}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
{/if}