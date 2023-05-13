
import React from 'react'

export default function Signup() {
	return (
		<div>
          <h3>Create your account</h3>
          <form action="/users" method="POST">
                <input type="text" name="name"  placeholder="Name"/>
                <input type="email" name="email"  placeholder="E-mail"/>
                <input type="password" name="password"  placeholder="Password"/>
                <input type="submit" value="Sign Up" name="register_submit" class="btn btn-register-submit"/>
          </form>

		</div>
	)
}

