@include('modals.modal-login')
@include('modals.modal-welcome')
@include('modals.modal-register')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://fonts.cdnfonts.com/css/chirp-2" rel="stylesheet" />
    <link rel="stylesheet" href="{{ URL::asset('css/general.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('css/header.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('css/sidebar.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('css/main.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('css/aside.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('css/footer.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('css/modal.css') }}" />
    <title>Twitter-clone</title>
</head>

<body>
    <header>
        <nav class="sidebar-nav">
            <div class="sidebar-logo">
                <a href="#">
                    <svg viewBox="0 0 24 24" aria-hidden="true"
                        class="r-1cvl2hr r-4qtqp9 r-yyyyoo r-16y2uox r-8kz0gk r-dnmrzs r-bnwqim r-1plcrui r-lrvibr r-lrsllp">
                        <g>
                            <path
                                d="M23.643 4.937c-.835.37-1.732.62-2.675.733.962-.576 1.7-1.49 2.048-2.578-.9.534-1.897.922-2.958 1.13-.85-.904-2.06-1.47-3.4-1.47-2.572 0-4.658 2.086-4.658 4.66 0 .364.042.718.12 1.06-3.873-.195-7.304-2.05-9.602-4.868-.4.69-.63 1.49-.63 2.342 0 1.616.823 3.043 2.072 3.878-.764-.025-1.482-.234-2.11-.583v.06c0 2.257 1.605 4.14 3.737 4.568-.392.106-.803.162-1.227.162-.3 0-.593-.028-.877-.082.593 1.85 2.313 3.198 4.352 3.234-1.595 1.25-3.604 1.995-5.786 1.995-.376 0-.747-.022-1.112-.065 2.062 1.323 4.51 2.093 7.14 2.093 8.57 0 13.255-7.098 13.255-13.254 0-.2-.005-.402-.014-.602.91-.658 1.7-1.477 2.323-2.41z">
                            </path>
                        </g>
                    </svg>
                </a>
            </div>
            <div class="nav-links-container">
                <a href="#" class="sidebar-nav-home">
                    <svg viewBox="0 0 24 24" aria-hidden="true"
                        class="r-18jsvk2 r-4qtqp9 r-yyyyoo r-lwhw9o r-dnmrzs r-bnwqim r-1plcrui r-lrvibr r-cnnz9e">
                        <g>
                            <path
                                d="M10.64 3.157l-.36 3.593h4.99l.38-3.892 2.99.299-.36 3.593h2.97v2.5h-3.22l-.55 5.5h2.77v2.5h-3.02l-.39 3.892-2.98-.299.36-3.593H9.23l-.39 3.892-2.98-.299.36-3.593H2.75v-2.5h3.72l.55-5.5H3.75v-2.5h3.52l.38-3.892 2.99.299zm3.83 11.593l.55-5.5h-4.99l-.55 5.5h4.99z">
                            </path>
                        </g>
                    </svg>
                    <span>Browse</span>
                </a>
                <a href="#">
                    <svg viewBox="0 0 24 24" aria-hidden="true"
                        class="r-18jsvk2 r-4qtqp9 r-yyyyoo r-lwhw9o r-dnmrzs r-bnwqim r-1plcrui r-lrvibr r-cnnz9e">
                        <g>
                            <path
                                d="M10.54 1.75h2.92l1.57 2.36c.11.17.32.25.53.21l2.53-.59 2.17 2.17-.58 2.54c-.05.2.04.41.21.53l2.36 1.57v2.92l-2.36 1.57c-.17.12-.26.33-.21.53l.58 2.54-2.17 2.17-2.53-.59c-.21-.04-.42.04-.53.21l-1.57 2.36h-2.92l-1.58-2.36c-.11-.17-.32-.25-.52-.21l-2.54.59-2.17-2.17.58-2.54c.05-.2-.03-.41-.21-.53l-2.35-1.57v-2.92L4.1 8.97c.18-.12.26-.33.21-.53L3.73 5.9 5.9 3.73l2.54.59c.2.04.41-.04.52-.21l1.58-2.36zm1.07 2l-.98 1.47C10.05 6.08 9 6.5 7.99 6.27l-1.46-.34-.6.6.33 1.46c.24 1.01-.18 2.07-1.05 2.64l-1.46.98v.78l1.46.98c.87.57 1.29 1.63 1.05 2.64l-.33 1.46.6.6 1.46-.34c1.01-.23 2.06.19 2.64 1.05l.98 1.47h.78l.97-1.47c.58-.86 1.63-1.28 2.65-1.05l1.45.34.61-.6-.34-1.46c-.23-1.01.18-2.07 1.05-2.64l1.47-.98v-.78l-1.47-.98c-.87-.57-1.28-1.63-1.05-2.64l.34-1.46-.61-.6-1.45.34c-1.02.23-2.07-.19-2.65-1.05l-.97-1.47h-.78zM12 10.5c-.83 0-1.5.67-1.5 1.5s.67 1.5 1.5 1.5c.82 0 1.5-.67 1.5-1.5s-.68-1.5-1.5-1.5zM8.5 12c0-1.93 1.56-3.5 3.5-3.5 1.93 0 3.5 1.57 3.5 3.5s-1.57 3.5-3.5 3.5c-1.94 0-3.5-1.57-3.5-3.5z">
                            </path>
                        </g>
                    </svg>
                    <span>Settings</span>
                </a>
            </div>
        </nav>
    </header>
    <div class="content-container">
        <main>

            <div class="search-bar-container login-searchbar-container">
                <div class="search-bar-icon">
                    <svg viewBox="0 0 24 24" aria-hidden="true"
                        class="r-14j79pv r-4qtqp9 r-yyyyoo r-1xvli5t r-dnmrzs r-4wgw6l r-f727ji r-bnwqim r-1plcrui r-lrvibr">
                        <g>
                            <path
                                d="M10.25 3.75c-3.59 0-6.5 2.91-6.5 6.5s2.91 6.5 6.5 6.5c1.795 0 3.419-.726 4.596-1.904 1.178-1.177 1.904-2.801 1.904-4.596 0-3.59-2.91-6.5-6.5-6.5zm-8.5 6.5c0-4.694 3.806-8.5 8.5-8.5s8.5 3.806 8.5 8.5c0 1.986-.682 3.815-1.824 5.262l4.781 4.781-1.414 1.414-4.781-4.781c-1.447 1.142-3.276 1.824-5.262 1.824-4.694 0-8.5-3.806-8.5-8.5z">
                            </path>
                        </g>
                    </svg>
                </div>

                <input class="search-bar" type="text" placeholder="Search Twitter" />

                <div class="login-searchbar-settings">
                    <svg viewBox="0 0 24 24" aria-hidden="true"
                        class="r-18jsvk2 r-4qtqp9 r-yyyyoo r-z80fyv r-dnmrzs r-bnwqim r-1plcrui r-lrvibr r-19wmn03">
                        <g>
                            <path
                                d="M10.54 1.75h2.92l1.57 2.36c.11.17.32.25.53.21l2.53-.59 2.17 2.17-.58 2.54c-.05.2.04.41.21.53l2.36 1.57v2.92l-2.36 1.57c-.17.12-.26.33-.21.53l.58 2.54-2.17 2.17-2.53-.59c-.21-.04-.42.04-.53.21l-1.57 2.36h-2.92l-1.58-2.36c-.11-.17-.32-.25-.52-.21l-2.54.59-2.17-2.17.58-2.54c.05-.2-.03-.41-.21-.53l-2.35-1.57v-2.92L4.1 8.97c.18-.12.26-.33.21-.53L3.73 5.9 5.9 3.73l2.54.59c.2.04.41-.04.52-.21l1.58-2.36zm1.07 2l-.98 1.47C10.05 6.08 9 6.5 7.99 6.27l-1.46-.34-.6.6.33 1.46c.24 1.01-.18 2.07-1.05 2.64l-1.46.98v.78l1.46.98c.87.57 1.29 1.63 1.05 2.64l-.33 1.46.6.6 1.46-.34c1.01-.23 2.06.19 2.64 1.05l.98 1.47h.78l.97-1.47c.58-.86 1.63-1.28 2.65-1.05l1.45.34.61-.6-.34-1.46c-.23-1.01.18-2.07 1.05-2.64l1.47-.98v-.78l-1.47-.98c-.87-.57-1.28-1.63-1.05-2.64l.34-1.46-.61-.6-1.45.34c-1.02.23-2.07-.19-2.65-1.05l-.97-1.47h-.78zM12 10.5c-.83 0-1.5.67-1.5 1.5s.67 1.5 1.5 1.5c.82 0 1.5-.67 1.5-1.5s-.68-1.5-1.5-1.5zM8.5 12c0-1.93 1.56-3.5 3.5-3.5 1.93 0 3.5 1.57 3.5 3.5s-1.57 3.5-3.5 3.5c-1.94 0-3.5-1.57-3.5-3.5z">
                            </path>
                        </g>
                    </svg>
                </div>

            </div>

            <section class="posts login-main-tweets">


                <div class="aside-section-header hashtags-header">
                    <h6>Most popular for you</h6>
                </div>

                <div class="hashtag-container">
                    <div class="hashtag-header">
                        <span class="dimmed-text">Trending</span>
                        <svg viewBox="0 0 24 24" aria-hidden="true"
                            class="r-4qtqp9 r-yyyyoo r-1xvli5t r-dnmrzs r-bnwqim r-1plcrui r-lrvibr r-1hdv0qi">
                            <g>
                                <path
                                    d="M3 12c0-1.1.9-2 2-2s2 .9 2 2-.9 2-2 2-2-.9-2-2zm9 2c1.1 0 2-.9 2-2s-.9-2-2-2-2 .9-2 2 .9 2 2 2zm7 0c1.1 0 2-.9 2-2s-.9-2-2-2-2 .9-2 2 .9 2 2 2z">
                                </path>
                            </g>
                        </svg>
                    </div>
                    <div class="hashtag-name">TypeScript</div>
                    <div class="hashtag-number dimmed-text">42.3K Tweets</div>
                </div>

                <div class="hashtag-container">
                    <div class="hashtag-header">
                        <span class="dimmed-text">Sports &#183; Trending</span>
                        <svg viewBox="0 0 24 24" aria-hidden="true"
                            class="r-4qtqp9 r-yyyyoo r-1xvli5t r-dnmrzs r-bnwqim r-1plcrui r-lrvibr r-1hdv0qi">
                            <g>
                                <path
                                    d="M3 12c0-1.1.9-2 2-2s2 .9 2 2-.9 2-2 2-2-.9-2-2zm9 2c1.1 0 2-.9 2-2s-.9-2-2-2-2 .9-2 2 .9 2 2 2zm7 0c1.1 0 2-.9 2-2s-.9-2-2-2-2 .9-2 2 .9 2 2 2z">
                                </path>
                            </g>
                        </svg>
                    </div>
                    <div class="hashtag-name">#BarcaMUFC</div>
                    <div class="hashtag-number dimmed-text">42.3K Tweets</div>


                </div>

                <div class="show-more-btn hashtag">Show more</div>

            </section>
        </main>



        <aside>

            <div class="aside-section hashtags-container login-aside-section">
                <div class="aside-section-header hashtags-header">
                    <h6>New to Twitter?</h6>
                </div>
                <p class="aside-login-text dimmed-text">Register now to create your own personalized timeline!</p>

                <div class="aside-login-options">
                    <div class="channel-container login-option">
                        <div class="channel-image login-option-image">
                            <img src="https://lh3.googleusercontent.com/a/AGNmyxaRC5TjJaJabXPexoiSRCzKzhtTUQHV645mP7so=s96-c"
                                alt="Zdjęcie profilowe użytkownika Kent">
                        </div>
                        <div class="channel-info">
                            <div class="channel-name">Sign up with google</div>
                            <div class="dimmed-text">nik.kow@outlook.com</div>
                        </div>
                        <div class="login-option-google-logo follow-btn-container">
                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48"
                                class="LgbsSe-Bz112c">
                                <g>
                                    <path fill="#EA4335"
                                        d="M24 9.5c3.54 0 6.71 1.22 9.21 3.6l6.85-6.85C35.9 2.38 30.47 0 24 0 14.62 0 6.51 5.38 2.56 13.22l7.98 6.19C12.43 13.72 17.74 9.5 24 9.5z">
                                    </path>
                                    <path fill="#4285F4"
                                        d="M46.98 24.55c0-1.57-.15-3.09-.38-4.55H24v9.02h12.94c-.58 2.96-2.26 5.48-4.78 7.18l7.73 6c4.51-4.18 7.09-10.36 7.09-17.65z">
                                    </path>
                                    <path fill="#FBBC05"
                                        d="M10.53 28.59c-.48-1.45-.76-2.99-.76-4.59s.27-3.14.76-4.59l-7.98-6.19C.92 16.46 0 20.12 0 24c0 3.88.92 7.54 2.56 10.78l7.97-6.19z">
                                    </path>
                                    <path fill="#34A853"
                                        d="M24 48c6.48 0 11.93-2.13 15.89-5.81l-7.73-6c-2.15 1.45-4.92 2.3-8.16 2.3-6.26 0-11.57-4.22-13.47-9.91l-7.98 6.19C6.51 42.62 14.62 48 24 48z">
                                    </path>
                                    <path fill="none" d="M0 0h48v48H0z"></path>
                                </g>
                            </svg>
                        </div>
                    </div>

                    <div class="channel-container login-option login-option-apple">
                        <div class="channel-image login-option-image">
                            <svg viewBox="0 0 24 24" aria-hidden="true"
                                class="r-18jsvk2 r-4qtqp9 r-yyyyoo r-z80fyv r-1d4mawv r-dnmrzs r-bnwqim r-1plcrui r-lrvibr r-19wmn03">
                                <g>
                                    <path
                                        d="M16.365 1.43c0 1.14-.493 2.27-1.177 3.08-.744.9-1.99 1.57-2.987 1.57-.12 0-.23-.02-.3-.03-.01-.06-.04-.22-.04-.39 0-1.15.572-2.27 1.206-2.98.804-.94 2.142-1.64 3.248-1.68.03.13.05.28.05.43zm4.565 15.71c-.03.07-.463 1.58-1.518 3.12-.945 1.34-1.94 2.71-3.43 2.71-1.517 0-1.9-.88-3.63-.88-1.698 0-2.302.91-3.67.91-1.377 0-2.332-1.26-3.428-2.8-1.287-1.82-2.323-4.63-2.323-7.28 0-4.28 2.797-6.55 5.552-6.55 1.448 0 2.675.95 3.6.95.865 0 2.222-1.01 3.902-1.01.613 0 2.886.06 4.374 2.19-.13.09-2.383 1.37-2.383 4.19 0 3.26 2.854 4.42 2.955 4.45z">
                                    </path>
                                </g>
                            </svg>
                        </div>
                        <div class="channel-info">
                            <div class="channel-name">Sign up with Apple</div>
                        </div>
                    </div>

                    <div class="channel-container login-option login-option-apple">
                        <div class="channel-info">
                            <div class="channel-name"><button class="btn btn-empty" data-toggle="modal"
                                    data-target="#modal-welcome">Create an account</button></div>
                        </div>
                    </div>

                </div>

                <div class="login-disclamier dimmed-text">
                    By signing up, you agree to the <span class="hashtag"> Terms of Use and Privacy Policy</span> ,
                    including <span class="hashtag"> the Cookie Policy</span> .
                </div>
            </div>

            <div class="aside-section terms-data login-terms-data">
                <a href="">Terms of Use</a>
                <a href="">Privacy Policy</a>
                <a href="">Cookie Policy</a>
                <br>
                <a href="">Availability</a>
                <a href="">Information about advertisements</a>
                <br>
                <a href="">More</a>
                <span>&#169; 2023 Twitter-copy, Inc.</span>
            </div>
        </aside>
    </div>

    <footer class="login-footer">
        <div class="login-footer-text">
            <h2>Stay updated</h2>
            <p>Twitter users are the first to know.</p>
        </div>
        <div class="login-footer-links">


            <button class="btn login-btn" data-toggle="modal" data-target="#modal-login">Log in</button>
            {{-- <a href="#" id="login-btn-modal" >Log in</a> --}}
            <a href="#" id="register_modal" class="btn register-btn">register</a>
        </div>

    </footer>














    {{-- TODO: put in layout --}}
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Bootstrap JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <script src="{{ URL::asset('js/header.js') }} "></script>
    <script src="{{ URL::asset('js/sidebar.js') }} "></script>
</body>

</html>
