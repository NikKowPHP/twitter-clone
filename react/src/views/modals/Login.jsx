import React, { useState } from 'react'
import { ReactDOM } from 'react'
import Modal from './Modal'

export default function Login() {
	return (
		<>
      <Modal >
          <h3>Log in into your account</h3>

          <form action="/users/authenticate" method="POST">
                <input type="email" name="email"  placeholder="E-mail" />
                <input type="password" name="password"  placeholder="Password"/>
                <input type="submit" value="Log in" name="login_submit" className="btn btn-register-submit" />
          </form>

      </Modal>
		</>



	)
}
