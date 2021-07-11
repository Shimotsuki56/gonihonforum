

<!-- Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="loginModalLabel">Login and join the conversation</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form autocomplete="off" action="/anurag/forum/partials/_handlelogin.php" method="post">
          
          <div class="mb-3">
            <label for="username" class="form-label">Username</label>
            <input type="text" class="form-control"  name="log_username" aria-describedby="emailHelp">
            
          </div>
          <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="log_password" name="log_password">
          </div>
          <button type="submit" class="btn btn-primary">Login</button>
      </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>