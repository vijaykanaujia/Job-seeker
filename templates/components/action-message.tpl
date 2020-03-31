
{if isset($success)}
<div class="alert alert-success alert-dismissible fade show" role="alert" style="position: fixed;
    bottom: 0;
    width: 80%;
    z-index: 99;">
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
    z-index: 99;">
  {$danger}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
{/if}

<!-- ajax request taoster top right -->
<div role="alert" aria-live="assertive" aria-atomic="true" class="toast" data-autohide="true" style="position: fixed;
    top: 0;
    z-index: 99;
    right: 0;" data-delay="500">
  <div class="toast-header">
    <button type="button" class="ml-2 mb-1 close pull-right" data-dismiss="toast" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
  <div class="toast-body">
    Hello, world! This is a toast message.
  </div>
</div>