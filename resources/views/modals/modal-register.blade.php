    <div id="modal-register" class="modal modal-register">
      <div class="modal-content modal-content-register">
        <button type="button" class="close btn-empty" data-dismiss="modal" aria-label="Close">
          <span class="close" aria-hidden="true">&times;</span>
        </button>
        <div class="modal-body">
          <h3>Create your account</h3>
          <form action="src/includes/register.php" method="POST">
                <input type="text" name="username"  placeholder="Name">
                <input type="email" name="email"  placeholder="E-mail">
                <input type="password" name="password"  placeholder="Password">
                <input type="submit" value="Sign Up" name="register_submit" class="btn btn-register-submit">
          </form>
        </div>
      </div>
    </div>