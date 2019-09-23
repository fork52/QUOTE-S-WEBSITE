<!-- Modal HTML -->
<div id="myModal" class="modal fade">
  <div class="modal-dialog modal-login">
    <div class="modal-content">
      <div class="modal-header">
        <div class="avatar">
          <img src="../loginForm/user.png" alt="User">
        </div>        
        <h4 class="modal-title">Login</h4> 
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
      </div>
      <div class="modal-body">
        <form action="/examples/actions/confirmation.php" method="post">
          <div class="form-group">
            <input type="text" class="form-control" name="username" placeholder="Username" required="required">   
          </div>
          <div class="form-group">
            <input type="password" class="form-control" name="password" placeholder="Password" required="required"> 
          </div>        
          <div class="form-group">
            <button type="submit" class="btn btn-primary btn-lg btn-block login-btn">Login</button>
          </div>
        </form>
      </div>

      <div id="myFooter" class="modal-footer">
        <a href="#">Forgot Password?</a>
      </div>

    </div>

  </div>
</div>     
