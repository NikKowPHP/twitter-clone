import React, { useState } from "react";
import { Navigate, Outlet } from "react-router-dom";
import { useStateContext } from "../contexts/ContextProvider";
import Nav from "./defaultLayout/Nav";
import CreateTweet from "./defaultLayout/CreateTweet";
import Aside from "./defaultLayout/Aside";
import Main from "./defaultLayout/Main";
import styles from "../assets/styles";


export default function GuestLayout() {
  const { token } = useStateContext();
	console.log(token);	

  // if (!token) {
  //   return <Navigate to="/" />;
  // }

  



  return (
    <>
    <header>
			<Nav />
    </header>

    <main>
        <Main />

    </main>

    <aside>
			<Aside />
    </aside>





       


      

    </>
  );
}
