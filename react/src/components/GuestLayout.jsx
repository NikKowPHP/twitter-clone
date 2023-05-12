import React, { useState } from "react";
import {createPortal} from 'react-dom'
import { Navigate, Outlet } from "react-router-dom";
import { useStateContext } from "../contexts/ContextProvider";
import styles from "../assets/styles";
import  Nav  from "./guestLayout/GuestNav";
import  SearchBar from "./guestLayout/SearchBar";
import Modal from "../views/modals/Modal";
import Login from "../views/modals/Login";
import Signup from "../views/modals/Signup";

export default function GuestLayout() {
  const { token } = useStateContext();

  if (token) {
    return <Navigate to="/home" />;
  }

  const [isModalOpen, setIsModalOpen] = useState(false);

  const handleOpenLoginModal = () => {
    setIsModalOpen(true);
  }
  const handleCloseModal = () => {
    setIsModalOpen(false);
  }



  return (
    <>
       

      <Outlet />
      <header>
        <Nav />
      </header>
      <div className="content-container">
        <main>
          <SearchBar />

          <section className="posts login-main-tweets">
            <div className="aside-section-header hashtags-header">
              <h6>Most popular for you</h6>
            </div>

            <div className="hashtag-container">
              <div className="hashtag-header">
                <span className="dimmed-text">Trending</span>
                <svg
                  viewBox="0 0 24 24"
                  aria-hidden="true"
                  className="r-4qtqp9 r-yyyyoo r-1xvli5t r-dnmrzs r-bnwqim r-1plcrui r-lrvibr r-1hdv0qi"
                >
                  <g>
                    <path d="M3 12c0-1.1.9-2 2-2s2 .9 2 2-.9 2-2 2-2-.9-2-2zm9 2c1.1 0 2-.9 2-2s-.9-2-2-2-2 .9-2 2 .9 2 2 2zm7 0c1.1 0 2-.9 2-2s-.9-2-2-2-2 .9-2 2 .9 2 2 2z"></path>
                  </g>
                </svg>
              </div>
              <div className="hashtag-name">TypeScript</div>
              <div className="hashtag-number dimmed-text">42.3K Tweets</div>
            </div>

            <div className="hashtag-container">
              <div className="hashtag-header">
                <span className="dimmed-text">Sports &#183; Trending</span>
                <svg
                  viewBox="0 0 24 24"
                  aria-hidden="true"
                  className="r-4qtqp9 r-yyyyoo r-1xvli5t r-dnmrzs r-bnwqim r-1plcrui r-lrvibr r-1hdv0qi"
                >
                  <g>
                    <path d="M3 12c0-1.1.9-2 2-2s2 .9 2 2-.9 2-2 2-2-.9-2-2zm9 2c1.1 0 2-.9 2-2s-.9-2-2-2-2 .9-2 2 .9 2 2 2zm7 0c1.1 0 2-.9 2-2s-.9-2-2-2-2 .9-2 2 .9 2 2 2z"></path>
                  </g>
                </svg>
              </div>
              <div className="hashtag-name">#BarcaMUFC</div>
              <div className="hashtag-number dimmed-text">42.3K Tweets</div>
            </div>

            <div className="show-more-btn hashtag">Show more</div>
          </section>
        </main>

        <aside>
          <div className="aside-section hashtags-container login-aside-section">
            <div className="aside-section-header hashtags-header">
              <h6>New to Twitter?</h6>
            </div>
            <p className="aside-login-text dimmed-text">
              Register now to create your own personalized timeline!
            </p>

            <div className="aside-login-options">
              <div className="channel-container login-option">
                <div className="channel-image login-option-image">
                  <img
                    src="https://lh3.googleusercontent.com/a/AGNmyxaRC5TjJaJabXPexoiSRCzKzhtTUQHV645mP7so=s96-c"
                    alt="Zdjęcie profilowe użytkownika Kent"
                  />
                </div>
                <div className="channel-info">
                  <div className="channel-name">Sign up with google</div>
                  <div className="dimmed-text">nik.kow@outlook.com</div>
                </div>
                <div className="login-option-google-logo follow-btn-container">
                  <svg
                    version="1.1"
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 48 48"
                    className="LgbsSe-Bz112c"
                  >
                    <g>
                      <path
                        fill="#EA4335"
                        d="M24 9.5c3.54 0 6.71 1.22 9.21 3.6l6.85-6.85C35.9 2.38 30.47 0 24 0 14.62 0 6.51 5.38 2.56 13.22l7.98 6.19C12.43 13.72 17.74 9.5 24 9.5z"
                      ></path>
                      <path
                        fill="#4285F4"
                        d="M46.98 24.55c0-1.57-.15-3.09-.38-4.55H24v9.02h12.94c-.58 2.96-2.26 5.48-4.78 7.18l7.73 6c4.51-4.18 7.09-10.36 7.09-17.65z"
                      ></path>
                      <path
                        fill="#FBBC05"
                        d="M10.53 28.59c-.48-1.45-.76-2.99-.76-4.59s.27-3.14.76-4.59l-7.98-6.19C.92 16.46 0 20.12 0 24c0 3.88.92 7.54 2.56 10.78l7.97-6.19z"
                      ></path>
                      <path
                        fill="#34A853"
                        d="M24 48c6.48 0 11.93-2.13 15.89-5.81l-7.73-6c-2.15 1.45-4.92 2.3-8.16 2.3-6.26 0-11.57-4.22-13.47-9.91l-7.98 6.19C6.51 42.62 14.62 48 24 48z"
                      ></path>
                      <path fill="none" d="M0 0h48v48H0z"></path>
                    </g>
                  </svg>
                </div>
              </div>

              <div className="channel-container login-option login-option-apple">
                <div className="channel-image login-option-image">
                  <svg
                    viewBox="0 0 24 24"
                    aria-hidden="true"
                    className="r-18jsvk2 r-4qtqp9 r-yyyyoo r-z80fyv r-1d4mawv r-dnmrzs r-bnwqim r-1plcrui r-lrvibr r-19wmn03"
                  >
                    <g>
                      <path d="M16.365 1.43c0 1.14-.493 2.27-1.177 3.08-.744.9-1.99 1.57-2.987 1.57-.12 0-.23-.02-.3-.03-.01-.06-.04-.22-.04-.39 0-1.15.572-2.27 1.206-2.98.804-.94 2.142-1.64 3.248-1.68.03.13.05.28.05.43zm4.565 15.71c-.03.07-.463 1.58-1.518 3.12-.945 1.34-1.94 2.71-3.43 2.71-1.517 0-1.9-.88-3.63-.88-1.698 0-2.302.91-3.67.91-1.377 0-2.332-1.26-3.428-2.8-1.287-1.82-2.323-4.63-2.323-7.28 0-4.28 2.797-6.55 5.552-6.55 1.448 0 2.675.95 3.6.95.865 0 2.222-1.01 3.902-1.01.613 0 2.886.06 4.374 2.19-.13.09-2.383 1.37-2.383 4.19 0 3.26 2.854 4.42 2.955 4.45z"></path>
                    </g>
                  </svg>
                </div>
                <div className="channel-info">
                  <div className="channel-name">Sign up with Apple</div>
                </div>
              </div>

              <div className="channel-container login-option login-option-apple">
                <div className="channel-info">
                  <div className="channel-name">
                    <button
                      className="btn btn-empty"
                      data-toggle="modal"
                      data-target="#modal-welcome"
                    >
                      Create an account
                    </button>
                  </div>
                </div>
              </div>
            </div>

            <div className="login-disclamier dimmed-text">
              By signing up, you agree to the{" "}
              <span className="hashtag"> Terms of Use and Privacy Policy</span>{" "}
              , including <span className="hashtag"> the Cookie Policy</span> .
            </div>
          </div>

          <div className="aside-section terms-data login-terms-data">
            <a href="">Terms of Use</a>
            <a href="">Privacy Policy</a>
            <a href="">Cookie Policy</a>
            <br />
            <a href="">Availability</a>
            <a href="">Information about advertisements</a>
            <br />
            <a href="">More</a>
            <span>&#169; 2023 Twitter-copy, Inc.</span>
          </div>
        </aside>
      </div>

      <footer className="login-footer">
        <div className="login-footer-text">
          <h2>Stay updated</h2>
          <p>Twitter users are the first to know.</p>
        </div>
        <div className="login-footer-links">


          <button
            className="btn login-btn"
            onClick={handleOpenLoginModal}

          >
            Log in
          </button>

        <Modal  isOpen={isModalOpen} onClose={handleCloseModal}>
          <Login />
        </Modal>

          <a href="#" id="register_modal" className="btn register-btn">
            register
          </a>
        </div>
      </footer>

      

    </>
  );
}
