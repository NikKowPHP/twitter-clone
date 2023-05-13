
import React, { useRef } from 'react'
import {useStateContext} from '../../contexts/ContextProvider';
import axiosClient from '../../axios-client';

export default function Signup() {
	const nameRef = useRef();
	const emailRef = useRef();
	const passwordRef = useRef();
	const {setUser, setToken} = useStateContext();
	const onSubmit = (e) => {
		e.preventDefault();
		const payload = {
			name: nameRef.current.value,
			email: emailRef.current.value,
			password: passwordRef.current.value,
		}
		axiosClient.post('/signup', payload)
		.then(({data}) => {
			setToken(data.token);
			setUser(data.user)
		})
		.catch(err => {
			const response =err.response;
			if(respose && response.status === 422) {
				console.log(response.data.errors);
			}
		})
	}
	return (
		<div>
          <h3>Create your account</h3>
          <form action="" onSubmit={onSubmit} >
                <input ref={nameRef} type="text"  placeholder="Name"/>
                <input ref={emailRef} type="email"   placeholder="E-mail"/>
                <input ref={passwordRef} type="password" name="password"  placeholder="Password"/>
								<button className='btn btn-register-submit'>Sign Up</button>
          </form>

		</div>
	)
}

