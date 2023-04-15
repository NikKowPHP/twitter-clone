<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="icon" href="images/favicon.ico" />

    <link rel="stylesheet" href="/resources/css/general.css" />
    <link rel="stylesheet" href="/resources/css/header.css" />
    <link rel="stylesheet" href="/resources./styles/sidebar.css" />
    <link rel="stylesheet" href="/resources/css./styles/main.css" />
    <link rel="stylesheet" href="/resources/css./styles/aside.css" />
    <link rel="stylesheet" href="/resources/css./styles/footer.css" />
    <link rel="stylesheet" href="/resources/css/modal.css" />

    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <script src="{{ asset('js/bootstrap.min.js') }}" defer></script>
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>


        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
            integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
            crossorigin="anonymous"
            referrerpolicy="no-referrer"
        />
        <script src="https://cdn.tailwindcss.com"></script>
            <script src="//unpkg.com/alpinejs" defer></script>
        <script>
            tailwind.config = {
                theme: {
                    extend: {
                        colors: {
                            laravel: "#ef3b2d",
                        },
                    },
                },
            };
        </script>
        <title>Twitter-clone</title>
    </head>
    <body class="mb-48">
      <nav class="sidebar-nav">
        <div class="sidebar-logo">
          <a href="/">
            {{-- TRIGGER WELCOME ROUTE --}}
            <svg
              viewBox="0 0 24 24"
              aria-hidden="true"
              class="r-1cvl2hr r-4qtqp9 r-yyyyoo r-16y2uox r-8kz0gk r-dnmrzs r-bnwqim r-1plcrui r-lrvibr r-lrsllp"
            >
              <g>
                <path
                  d="M23.643 4.937c-.835.37-1.732.62-2.675.733.962-.576 1.7-1.49 2.048-2.578-.9.534-1.897.922-2.958 1.13-.85-.904-2.06-1.47-3.4-1.47-2.572 0-4.658 2.086-4.658 4.66 0 .364.042.718.12 1.06-3.873-.195-7.304-2.05-9.602-4.868-.4.69-.63 1.49-.63 2.342 0 1.616.823 3.043 2.072 3.878-.764-.025-1.482-.234-2.11-.583v.06c0 2.257 1.605 4.14 3.737 4.568-.392.106-.803.162-1.227.162-.3 0-.593-.028-.877-.082.593 1.85 2.313 3.198 4.352 3.234-1.595 1.25-3.604 1.995-5.786 1.995-.376 0-.747-.022-1.112-.065 2.062 1.323 4.51 2.093 7.14 2.093 8.57 0 13.255-7.098 13.255-13.254 0-.2-.005-.402-.014-.602.91-.658 1.7-1.477 2.323-2.41z"
                ></path>
              </g>
            </svg>
          </a>
        </div>
        <div class="nav-links-container">
          <a href="/" class="sidebar-nav-home">
            <svg
              viewBox="0 0 24 24"
              aria-hidden="true"
              class="r-18jsvk2 r-4qtqp9 r-yyyyoo r-lwhw9o r-dnmrzs r-bnwqim r-1plcrui r-lrvibr r-cnnz9e"
            >
              <g>
                <path
                  d="M12 1.696L.622 8.807l1.06 1.696L3 9.679V19.5C3 20.881 4.119 22 5.5 22h13c1.381 0 2.5-1.119 2.5-2.5V9.679l1.318.824 1.06-1.696L12 1.696zM12 16.5c-1.933 0-3.5-1.567-3.5-3.5s1.567-3.5 3.5-3.5 3.5 1.567 3.5 3.5-1.567 3.5-3.5 3.5z"
                ></path>
              </g>
            </svg>
            <span>Home</span>
          </a>
          <a href="">
            <svg
              viewBox="0 0 24 24"
              aria-hidden="true"
              class="r-18jsvk2 r-4qtqp9 r-yyyyoo r-lwhw9o r-dnmrzs r-bnwqim r-1plcrui r-lrvibr r-cnnz9e"
            >
              <g>
                <path
                  d="M10.09 3.098L9.72 7h5.99l.39-4.089 1.99.187L17.72 7h3.78v2h-3.97l-.56 6h3.53v2h-3.72l-.38 4.089-1.99-.187.36-3.902H8.78l-.38 4.089-1.99-.187L6.77 17H2.5v-2h4.46l.56-6H3.5V7h4.21l.39-4.089 1.99.187zM14.96 15l.56-6H9.53l-.56 6h5.99z"
                ></path>
              </g>
            </svg>
            <span>Explore</span> 
          </a>
          <a href="">
            <svg
              viewBox="0 0 24 24"
              aria-hidden="true"
              class="r-18jsvk2 r-4qtqp9 r-yyyyoo r-lwhw9o r-dnmrzs r-bnwqim r-1plcrui r-lrvibr r-cnnz9e"
            >
              <g>
                <path
                  d="M19.993 9.042C19.48 5.017 16.054 2 11.996 2s-7.49 3.021-7.999 7.051L2.866 18H7.1c.463 2.282 2.481 4 4.9 4s4.437-1.718 4.9-4h4.236l-1.143-8.958zM12 20c-1.306 0-2.417-.835-2.829-2h5.658c-.412 1.165-1.523 2-2.829 2zm-6.866-4l.847-6.698C6.364 6.272 8.941 4 11.996 4s5.627 2.268 6.013 5.295L18.864 16H5.134z"
                ></path>
              </g>
            </svg>
            <span>Notifications</span> 
          </a>
          <a href="">
            <svg
              viewBox="0 0 24 24"
              aria-hidden="true"
              class="r-18jsvk2 r-4qtqp9 r-yyyyoo r-lwhw9o r-dnmrzs r-bnwqim r-1plcrui r-lrvibr r-cnnz9e"
            >
              <g>
                <path
                  d="M1.998 5.5c0-1.381 1.119-2.5 2.5-2.5h15c1.381 0 2.5 1.119 2.5 2.5v13c0 1.381-1.119 2.5-2.5 2.5h-15c-1.381 0-2.5-1.119-2.5-2.5v-13zm2.5-.5c-.276 0-.5.224-.5.5v2.764l8 3.638 8-3.636V5.5c0-.276-.224-.5-.5-.5h-15zm15.5 5.463l-8 3.636-8-3.638V18.5c0 .276.224.5.5.5h15c.276 0 .5-.224.5-.5v-8.037z"
                ></path>
              </g>
            </svg>
            <span>Messages</span> 
          </a>
          <a href="">
            <svg
              viewBox="0 0 24 24"
              aria-hidden="true"
              class="r-18jsvk2 r-4qtqp9 r-yyyyoo r-lwhw9o r-dnmrzs r-bnwqim r-1plcrui r-lrvibr r-cnnz9e"
            >
              <g>
                <path
                  d="M4 4.5C4 3.12 5.119 2 6.5 2h11C18.881 2 20 3.12 20 4.5v18.44l-8-5.71-8 5.71V4.5zM6.5 4c-.276 0-.5.22-.5.5v14.56l6-4.29 6 4.29V4.5c0-.28-.224-.5-.5-.5h-11z"
                ></path>
              </g>
            </svg>
            <span>Bookmarks</span>
            </a
          >
          <a href="">
            <svg
              viewBox="0 0 24 24"
              aria-hidden="true"
              class="r-18jsvk2 r-4qtqp9 r-yyyyoo r-lwhw9o r-dnmrzs r-bnwqim r-1plcrui r-lrvibr r-cnnz9e"
            >
              <g>
                <path
                  d="M4 4.5C4 3.12 5.119 2 6.5 2h11C18.881 2 20 3.12 20 4.5v18.44l-8-5.71-8 5.71V4.5zM6.5 4c-.276 0-.5.22-.5.5v14.56l6-4.29 6 4.29V4.5c0-.28-.224-.5-.5-.5h-11z"
                ></path>
              </g>
            </svg>
            <span>Lists</span>
            </a
          >
          <a href="">
            <svg
              viewBox="0 0 24 24"
              aria-hidden="true"
              class="r-18jsvk2 r-4qtqp9 r-yyyyoo r-lwhw9o r-dnmrzs r-bnwqim r-1plcrui r-lrvibr r-cnnz9e"
            >
              <g>
                <path
                  d="M5.651 19h12.698c-.337-1.8-1.023-3.21-1.945-4.19C15.318 13.65 13.838 13 12 13s-3.317.65-4.404 1.81c-.922.98-1.608 2.39-1.945 4.19zm.486-5.56C7.627 11.85 9.648 11 12 11s4.373.85 5.863 2.44c1.477 1.58 2.366 3.8 2.632 6.46l.11 1.1H3.395l.11-1.1c.266-2.66 1.155-4.88 2.632-6.46zM12 4c-1.105 0-2 .9-2 2s.895 2 2 2 2-.9 2-2-.895-2-2-2zM8 6c0-2.21 1.791-4 4-4s4 1.79 4 4-1.791 4-4 4-4-1.79-4-4z"
                ></path>
              </g>
            </svg>
            <span>Profile</span>
            </a>
          <a href="">
            <svg
              viewBox="0 0 24 24"
              aria-hidden="true"
              class="r-18jsvk2 r-4qtqp9 r-yyyyoo r-lwhw9o r-dnmrzs r-bnwqim r-1plcrui r-lrvibr r-cnnz9e"
            >
              <g>
                <path
                  d="M5.651 19h12.698c-.337-1.8-1.023-3.21-1.945-4.19C15.318 13.65 13.838 13 12 13s-3.317.65-4.404 1.81c-.922.98-1.608 2.39-1.945 4.19zm.486-5.56C7.627 11.85 9.648 11 12 11s4.373.85 5.863 2.44c1.477 1.58 2.366 3.8 2.632 6.46l.11 1.1H3.395l.11-1.1c.266-2.66 1.155-4.88 2.632-6.46zM12 4c-1.105 0-2 .9-2 2s.895 2 2 2 2-.9 2-2-.895-2-2-2zM8 6c0-2.21 1.791-4 4-4s4 1.79 4 4-1.791 4-4 4-4-1.79-4-4z"
                ></path>
              </g>
            </svg>
            <span>More</span>
          </a>
        </div>
        <div class="sidebar-nav-tweet-btn">
          <a id="big-tweet-btn" href="#">Tweet</a>

          <a id="small-tweet-btn"  href="#">
          <svg viewBox="0 0 24 24" aria-hidden="true" class="r-4qtqp9 r-yyyyoo r-1472mwg r-dnmrzs r-bnwqim r-1plcrui r-lrvibr r-lrsllp" style="color: rgb(255, 255, 255);"><g><path d="M23 3c-6.62-.1-10.38 2.421-13.05 6.03C7.29 12.61 6 17.331 6 22h2c0-1.007.07-2.012.19-3H12c4.1 0 7.48-3.082 7.94-7.054C22.79 10.147 23.17 6.359 23 3zm-7 8h-1.5v2H16c.63-.016 1.2-.08 1.72-.188C16.95 15.24 14.68 17 12 17H8.55c.57-2.512 1.57-4.851 3-6.78 2.16-2.912 5.29-4.911 9.45-5.187C20.95 8.079 19.9 11 16 11zM4 9V6H1V4h3V1h2v3h3v2H6v3H4z"></path></g></svg>
          </a>

        </div>
        <div id="sidebar_profile" class="sidebar-profile-container">
          <div class="sidebar-profile-image-container">
            <img src="images/<?= $user->image ?>" alt="<?= $user->image ?> logo" />
          </div>
          <div class="profile-info">
            <p class="sidebar-profile-name"><?php echo $user->username; ?></p>
            <p class="sidebar-profile-username">@<?php echo $user->username; ?></p>
          </div>
          <div class="sidebar-profile-more">
                  <svg
                    viewBox="0 0 24 24"
                    aria-hidden="true"
                    class="r-4qtqp9 r-yyyyoo r-1xvli5t r-dnmrzs r-bnwqim r-1plcrui r-lrvibr r-1hdv0qi"
                  >
                    <g>
                      <path
                        d="M3 12c0-1.1.9-2 2-2s2 .9 2 2-.9 2-2 2-2-.9-2-2zm9 2c1.1 0 2-.9 2-2s-.9-2-2-2-2 .9-2 2 .9 2 2 2zm7 0c1.1 0 2-.9 2-2s-.9-2-2-2-2 .9-2 2 .9 2 2 2z"
                      ></path>
                    </g>
                  </svg>
          </div>

          <div id="sidebar_profile_tooltip" class="tooltip sidebar-profile-tooltip">
            <a href="#">Add an existing account</a>
            <a href="src/includes/logout.php">Log out @<?php echo $user->username; ?></a>
          </div>

        </div>
      </nav>

      {{-- NAV END --}}



        <main>
            {{$slot}}
        </main>


<aside>
    <div class="search-bar-container">
        <div class="search-bar-icon">
            <svg
                    viewBox="0 0 24 24"
                    aria-hidden="true"
                    class="r-14j79pv r-4qtqp9 r-yyyyoo r-1xvli5t r-dnmrzs r-4wgw6l r-f727ji r-bnwqim r-1plcrui r-lrvibr"
            >
                <g>
                    <path
                            d="M10.25 3.75c-3.59 0-6.5 2.91-6.5 6.5s2.91 6.5 6.5 6.5c1.795 0 3.419-.726 4.596-1.904 1.178-1.177 1.904-2.801 1.904-4.596 0-3.59-2.91-6.5-6.5-6.5zm-8.5 6.5c0-4.694 3.806-8.5 8.5-8.5s8.5 3.806 8.5 8.5c0 1.986-.682 3.815-1.824 5.262l4.781 4.781-1.414 1.414-4.781-4.781c-1.447 1.142-3.276 1.824-5.262 1.824-4.694 0-8.5-3.806-8.5-8.5z"
                    ></path>
                </g>
            </svg>
        </div>
        <input class="search-bar" type="text" placeholder="Search Twitter"/>
    </div>

    <div class="aside-section hashtags-container">
        <div class="aside-section-header hashtags-header">
            <h6>Trands for you</h6>
        </div>

        <div class="hashtag-container">
            <div class="hashtag-header">
                <span class="dimmed-text">Trending</span>
                <svg
                        viewBox="0 0 24 24"
                        aria-hidden="true"
                        class="r-4qtqp9 r-yyyyoo r-1xvli5t r-dnmrzs r-bnwqim r-1plcrui r-lrvibr r-1hdv0qi"
                >
                    <g>
                        <path
                                d="M3 12c0-1.1.9-2 2-2s2 .9 2 2-.9 2-2 2-2-.9-2-2zm9 2c1.1 0 2-.9 2-2s-.9-2-2-2-2 .9-2 2 .9 2 2 2zm7 0c1.1 0 2-.9 2-2s-.9-2-2-2-2 .9-2 2 .9 2 2 2z"
                        ></path>
                    </g>
                </svg>
            </div>
            <div class="hashtag-name">TypeScript</div>
            <div class="hashtag-number dimmed-text">42.3K Tweets</div>
        </div>

        <div class="hashtag-container">
            <div class="hashtag-header">
                <span class="dimmed-text">Sports &#183; Trending</span>
                <svg
                        viewBox="0 0 24 24"
                        aria-hidden="true"
                        class="r-4qtqp9 r-yyyyoo r-1xvli5t r-dnmrzs r-bnwqim r-1plcrui r-lrvibr r-1hdv0qi"
                >
                    <g>
                        <path
                                d="M3 12c0-1.1.9-2 2-2s2 .9 2 2-.9 2-2 2-2-.9-2-2zm9 2c1.1 0 2-.9 2-2s-.9-2-2-2-2 .9-2 2 .9 2 2 2zm7 0c1.1 0 2-.9 2-2s-.9-2-2-2-2 .9-2 2 .9 2 2 2z"
                        ></path>
                    </g>
                </svg>
            </div>
            <div class="hashtag-name">#BarcaMUFC</div>
            <div class="hashtag-number dimmed-text">42.3K Tweets</div>
        </div>
        <div class="show-more-btn hashtag">Show more</div>
    </div>

    <div class="aside-section">
        <div class="aside-section-header">
            <h6>Who to follow</h6>
        </div>

        <?php $channels = User::get_all(); ?>
        <?php foreach ($channels as $channel): ?>
            <?php if ($channel->id != $user_id = Cookie::get('user_id')): ?>


                <div class="channel-container">
                    <div class="channel-image">
                        <img src="images/<?= $channel->image ?>" alt="<?= $channel->username; ?> logo"/>
                    </div>
                    <div class="channel-info">
                        <div class="channel-name"><?= $channel->username ?></div>
                        <div class="dimmed-text">@<?= $channel->username ?></div>
                    </div>
                    <div class="follow-btn-container">

                        <?php if ($user->is_following($channel->id)): ?>
                            <?php
                            $arr = ['user_id' => $user_id, 'following' => $channel->id];
                            $follow = Follow::get_by($arr);
                            ?>

                            <a href="src/includes/following_user.php?unfollow=<?= $follow->id ?>"
                               class="btn follow-btn">Unfollow</a>

                        <?php else: ?>

                            <a href="src/includes/following_user.php?follow=<?= $channel->id ?>" class="btn follow-btn">Follow</a>

                        <?php endif; ?>
                    </div>
                </div>
            <?php endif; ?>
        <?php endforeach; ?>


        <div class="show-more-btn hashtag">Show more</div>
    </div>

    <div class="aside-section terms-data">
        <a href="">Terms of Service</a>
        <a href="">Privacy Policy</a>
        <a href="">Cookie Policy</a>
        <br>
        <a href="">Accessibility</a>
        <a href="">Ads info</a>
        <a href="">More</a>
        <br>
        <span>&#169; 2023 Twitter-copy, Inc.</span>
    </div>
</aside>

    </div> 

    <script src="{{ URL::asset('js/header.js') }} "></script>
    <script src="{{ URL::asset('js/sidebar.js') }} "></script>
    <script src="{{ URL::asset('js/create_tweet.js') }} "></script>
    <script src="{{ URL::asset('js/icons_handler.js') }} "></script>
    <script src="{{ URL::asset('js/modal.js') }} "></script>

</body>


</html>

