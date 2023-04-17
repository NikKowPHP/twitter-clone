
    <div id="modal-login" class="modal modal-register modal-login">
      <div class="modal-content modal-content-register">
        <button type="button" class="close btn-empty" data-dismiss="modal" aria-label="Close">
          <span class="close" aria-hidden="true">&times;</span>
        </button>
        <div class="modal-body">
          <h3>Log in into your account</h3>

          <form action="/users/authenticate" method="POST">
            @csrf

                <input type="email" name="email"  placeholder="E-mail">
                <input type="password" name="password"  placeholder="Password">
                <input type="submit" value="Log in" name="login_submit" class="btn btn-register-submit">
          </form>
        </div>
      </div>
    </div>