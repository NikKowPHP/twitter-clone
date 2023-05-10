import React from 'react'

export default function Login() {
	return (

		<div>
    	<div id="modal-login" className="modal modal-register modal-login">
      <div className="modal-content modal-content-register">
        <button type="button" className="close btn-empty" data-dismiss="modal" aria-label="Close">
          <span class="close" aria-hidden="true">&times;</span>
        </button>
        <div className="modal-body">
          <h3>Log in into your account</h3>

          <form action="/users/authenticate" method="POST">
                <input type="email" name="email"  placeholder="E-mail" />
                <input type="password" name="password"  placeholder="Password"/>
                <input type="submit" value="Log in" name="login_submit" className="btn btn-register-submit" />
          </form>
        </div>
      </div>
    </div>
		</div>



	)
}
