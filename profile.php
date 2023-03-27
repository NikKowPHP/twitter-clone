<?php require_once("partials/header.php") ?>
<?php require_once("partials/navigation.php") ?>

<?php require_once("partials/modals/modal_edit-profile.php") ?>

<div class="content-container">
    <main class="profile-main">

        <!--TODO: RETWEETS-->
        <div class=" profile-header-top">

            <div class="profile-header-top-sticky-wrapper">
                <a class="home-link" href="index.php">
                    <svg viewBox="0 0 24 24" aria-hidden="true"
                         class="r-18jsvk2 r-4qtqp9 r-yyyyoo r-z80fyv r-dnmrzs r-bnwqim r-1plcrui r-lrvibr r-19wmn03">
                        <g>
                            <path d="M7.414 13l5.043 5.04-1.414 1.42L3.586 12l7.457-7.46 1.414 1.42L7.414 11H21v2H7.414z"></path>
                        </g>
                    </svg>
                </a>
                <div class="profile-header-top-credentials">
                    <div class="profile-header-top-username"><?php echo $user->username ?></div>
                    <!-- TODO: get_all_by_id tweets -->

                    <div class="profile-header-top-tweets">8 Tweets</div>
                </div>
            </div>

            <div class="profile-header-background">
                <img src="<?= 'images' . DS . $user->getBackgroundImage() ?>" alt="user background">
            </div>


            <div class="profile-header-user-info">
                <div class="profile-header-photo-wrapper">
                    <div class="profile-header-photo-container">
                        <img src="images/<?= $user->image ?>" alt="">
                    </div>
                    <button class="btn" id="edit_profile_open">Edit profile</button>
                </div>
                <div class="profile-header-user">
                    <div class="profile-header-top-username"><?= $user->username ?></div>
                    <div class="profile-header-user-link dimmed-text">@<?= $user->username ?></div>
                </div>
                <div class="profile-header-joined-date dimmed-text">
                    <!-- TODO: USER date  -->
                    <svg viewBox="0 0 24 24" aria-hidden="true"
                         class="r-14j79pv r-4qtqp9 r-yyyyoo r-1xvli5t r-1d4mawv r-dnmrzs r-bnwqim r-1plcrui r-lrvibr">
                        <g>
                            <path d="M7 4V3h2v1h6V3h2v1h1.5C19.89 4 21 5.12 21 6.5v12c0 1.38-1.11 2.5-2.5 2.5h-13C4.12 21 3 19.88 3 18.5v-12C3 5.12 4.12 4 5.5 4H7zm0 2H5.5c-.27 0-.5.22-.5.5v12c0 .28.23.5.5.5h13c.28 0 .5-.22.5-.5v-12c0-.28-.22-.5-.5-.5H17v1h-2V6H9v1H7V6zm0 6h2v-2H7v2zm0 4h2v-2H7v2zm4-4h2v-2h-2v2zm0 4h2v-2h-2v2zm4-4h2v-2h-2v2z"></path>
                        </g>
                    </svg>
                    <p>Joined November 2019</p>
                </div>
                <div class="profile-header-following-wrapper">
                    <div class="profile-follow"><span><?= $user->get_following_count() ?></span>Following</div>
                    <div class="profile-follow"><span><?= $user->get_followers_count() ?></span>Followers</div>
                </div>
            </div>

            <div id="header-buttons" class="header-buttons-container">
                <a href="#" class="header-button-link active-home-link"><span>Tweets</span> </a>
                <a href="#" class="header-button-link"><span>Replies</span></a>
                <a href="#" class="header-button-link"><span>Media</span></a>
                <a href="#" class="header-button-link"><span>Likes</span></a>
            </div>
        </div>

        <section>
            <?php
            $tweets = Tweet::get_all_by("user_id", $user->id);
            ?>

            <?php if (!is_null($tweets)): ?>
                <?php foreach ($tweets as $tweet): ?>

                    <?php
                    $tweet_author = User::get_by_id($tweet->user_id);


                    ?>

                    <article class="post">
                        <div class="channel-image">
                            <img src="images/post-1-channel.png" alt=""/>
                        </div>
                        <div class="post-content">
                            <div class="post-header">
                                <div class="post-header-info">
                                    <a class="channel-name" href=""><?= $tweet_author->username ?></a>
                                    <a class="channel-link dimmed-text" href=""
                                    >@<?= $tweet_author->username ?></a
                                    >
                                    <span class="dimmed-text"> &#183; </span>
                                    <span class="post-time dimmed-text"><?= $tweet->date; ?></span>
                                </div>
                                <div class="post-header-more">
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
                            </div>
                            <div class="post-body">
                                <div class="post-description">
                                    <p>
                                        <?= $tweet->body ?>
                                        <span class="link">
                      https://bit.ly/GrammarLearnEnglish
                                            <!--                                    TODO: CHANGE LINKS-->
                    </span>
                                        <span class="hashtag">
                      #valentinesday #quiz #grammar #learnenglish #LearnEnglish
                      #learningenglish #englishvocabulary #englishteachers
                    </span>
                                    </p>
                                </div>
                                <div class="post-image">
                                    <img src="images/<?= $tweet->image ?>" alt=""/>
                                </div>
                                <div class="post-tools">
                                    <svg
                                            viewBox="0 0 24 24"
                                            aria-hidden="true"
                                            class="r-4qtqp9 r-yyyyoo r-1xvli5t r-dnmrzs r-bnwqim r-1plcrui r-lrvibr r-1hdv0qi"
                                    >
                                        <g>
                                            <path
                                                    d="M1.751 10c0-4.42 3.584-8 8.005-8h4.366c4.49 0 8.129 3.64 8.129 8.13 0 2.96-1.607 5.68-4.196 7.11l-8.054 4.46v-3.69h-.067c-4.49.1-8.183-3.51-8.183-8.01zm8.005-6c-3.317 0-6.005 2.69-6.005 6 0 3.37 2.77 6.08 6.138 6.01l.351-.01h1.761v2.3l5.087-2.81c1.951-1.08 3.163-3.13 3.163-5.36 0-3.39-2.744-6.13-6.129-6.13H9.756z"
                                            ></path>
                                        </g>
                                    </svg>
                                    <svg
                                            viewBox="0 0 24 24"
                                            aria-hidden="true"
                                            class="r-4qtqp9 r-yyyyoo r-1xvli5t r-dnmrzs r-bnwqim r-1plcrui r-lrvibr r-1hdv0qi"
                                    >
                                        <g>
                                            <path
                                                    d="M4.5 3.88l4.432 4.14-1.364 1.46L5.5 7.55V16c0 1.1.896 2 2 2H13v2H7.5c-2.209 0-4-1.79-4-4V7.55L1.432 9.48.068 8.02 4.5 3.88zM16.5 6H11V4h5.5c2.209 0 4 1.79 4 4v8.45l2.068-1.93 1.364 1.46-4.432 4.14-4.432-4.14 1.364-1.46 2.068 1.93V8c0-1.1-.896-2-2-2z"
                                            ></path>
                                        </g>
                                    </svg>
                                    <svg
                                            viewBox="0 0 24 24"
                                            aria-hidden="true"
                                            class="r-4qtqp9 r-yyyyoo r-1xvli5t r-dnmrzs r-bnwqim r-1plcrui r-lrvibr r-1hdv0qi"
                                    >
                                        <g>
                                            <path
                                                    d="M16.697 5.5c-1.222-.06-2.679.51-3.89 2.16l-.805 1.09-.806-1.09C9.984 6.01 8.526 5.44 7.304 5.5c-1.243.07-2.349.78-2.91 1.91-.552 1.12-.633 2.78.479 4.82 1.074 1.97 3.257 4.27 7.129 6.61 3.87-2.34 6.052-4.64 7.126-6.61 1.111-2.04 1.03-3.7.477-4.82-.561-1.13-1.666-1.84-2.908-1.91zm4.187 7.69c-1.351 2.48-4.001 5.12-8.379 7.67l-.503.3-.504-.3c-4.379-2.55-7.029-5.19-8.382-7.67-1.36-2.5-1.41-4.86-.514-6.67.887-1.79 2.647-2.91 4.601-3.01 1.651-.09 3.368.56 4.798 2.01 1.429-1.45 3.146-2.1 4.796-2.01 1.954.1 3.714 1.22 4.601 3.01.896 1.81.846 4.17-.514 6.67z"
                                            ></path>
                                        </g>
                                    </svg>
                                    <svg
                                            viewBox="0 0 24 24"
                                            aria-hidden="true"
                                            class="r-4qtqp9 r-yyyyoo r-1xvli5t r-dnmrzs r-bnwqim r-1plcrui r-lrvibr r-1hdv0qi"
                                    >
                                        <g>
                                            <path
                                                    d="M8.75 21V3h2v18h-2zM18 21V8.5h2V21h-2zM4 21l.004-10h2L6 21H4zm9.248 0v-7h2v7h-2z"
                                            ></path>
                                        </g>
                                    </svg>
                                    <svg
                                            viewBox="0 0 24 24"
                                            aria-hidden="true"
                                            class="r-4qtqp9 r-yyyyoo r-1xvli5t r-dnmrzs r-bnwqim r-1plcrui r-lrvibr r-1hdv0qi"
                                    >
                                        <g>
                                            <path
                                                    d="M12 2.59l5.7 5.7-1.41 1.42L13 6.41V16h-2V6.41l-3.3 3.3-1.41-1.42L12 2.59zM21 15l-.02 3.51c0 1.38-1.12 2.49-2.5 2.49H5.5C4.11 21 3 19.88 3 18.5V15h2v3.5c0 .28.22.5.5.5h12.98c.28 0 .5-.22.5-.5L19 15h2z"
                                            ></path>
                                        </g>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </article>


                <?php endforeach; ?>


            <?php endif; ?>


        </section>

        <section>
            <?php
            $retweets = Retweet::get_all_by("user_id", $user->id);
            ?>

            <?php if (!is_null($retweets)): ?>
                <?php foreach ($retweets as $retweet): ?>

                    <?php
                    $tweet = Tweet::get_by_id($retweet->getTweetId());
                    $tweet_author = User::get_by_id($tweet->user_id);


                    ?>

                    <article class="post-wrapper">
                        <div class="retweet-wrapper">
                            <svg viewBox="0 0 24 24" aria-hidden="true"
                                 class="r-14j79pv r-4qtqp9 r-yyyyoo r-10ptun7 r-dnmrzs r-bnwqim r-1plcrui r-lrvibr r-1janqcz">
                                <g>
                                    <path d="M4.75 3.79l4.603 4.3-1.706 1.82L6 8.38v7.37c0 .97.784 1.75 1.75 1.75H13V20H7.75c-2.347 0-4.25-1.9-4.25-4.25V8.38L1.853 9.91.147 8.09l4.603-4.3zm11.5 2.71H11V4h5.25c2.347 0 4.25 1.9 4.25 4.25v7.37l1.647-1.53 1.706 1.82-4.603 4.3-4.603-4.3 1.706-1.82L18 15.62V8.25c0-.97-.784-1.75-1.75-1.75z"></path>
                                </g>
                            </svg>
                            <div class="retweet-caution">You Retweeted</div>
                        </div>
                        <div class="post">


                            <div class="channel-image">
                                <img src="images/post-1-channel.png" alt=""/>
                            </div>
                            <div class="post-content">
                                <div class="post-header">
                                    <div class="post-header-info">
                                        <a class="channel-name" href=""><?= $tweet_author->username ?></a>
                                        <a class="channel-link dimmed-text" href=""
                                        >@<?= $tweet_author->username ?></a
                                        >
                                        <span class="dimmed-text"> &#183; </span>
                                        <span class="post-time dimmed-text"><?= $tweet->date; ?></span>
                                    </div>
                                    <div class="post-header-more">
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
                                </div>
                                <div class="post-body">
                                    <div class="post-description">
                                        <p>
                                            <?= $tweet->body ?>
                                            <span class="link">
                      https://bit.ly/GrammarLearnEnglish
                                                <!--                                    TODO: CHANGE LINKS-->
                    </span>
                                            <span class="hashtag">
                      #valentinesday #quiz #grammar #learnenglish #LearnEnglish
                      #learningenglish #englishvocabulary #englishteachers
                    </span>
                                        </p>
                                    </div>
                                    <div class="post-image">
                                        <img src="images/<?= $tweet->image ?>" alt=""/>
                                    </div>
                                    <div class="post-tools">
                                        <svg
                                                viewBox="0 0 24 24"
                                                aria-hidden="true"
                                                class="r-4qtqp9 r-yyyyoo r-1xvli5t r-dnmrzs r-bnwqim r-1plcrui r-lrvibr r-1hdv0qi"
                                        >
                                            <g>
                                                <path
                                                        d="M1.751 10c0-4.42 3.584-8 8.005-8h4.366c4.49 0 8.129 3.64 8.129 8.13 0 2.96-1.607 5.68-4.196 7.11l-8.054 4.46v-3.69h-.067c-4.49.1-8.183-3.51-8.183-8.01zm8.005-6c-3.317 0-6.005 2.69-6.005 6 0 3.37 2.77 6.08 6.138 6.01l.351-.01h1.761v2.3l5.087-2.81c1.951-1.08 3.163-3.13 3.163-5.36 0-3.39-2.744-6.13-6.129-6.13H9.756z"
                                                ></path>
                                            </g>
                                        </svg>
                                        <svg
                                                viewBox="0 0 24 24"
                                                aria-hidden="true"
                                                class="r-4qtqp9 r-yyyyoo r-1xvli5t r-dnmrzs r-bnwqim r-1plcrui r-lrvibr r-1hdv0qi"
                                        >
                                            <g>
                                                <path
                                                        d="M4.5 3.88l4.432 4.14-1.364 1.46L5.5 7.55V16c0 1.1.896 2 2 2H13v2H7.5c-2.209 0-4-1.79-4-4V7.55L1.432 9.48.068 8.02 4.5 3.88zM16.5 6H11V4h5.5c2.209 0 4 1.79 4 4v8.45l2.068-1.93 1.364 1.46-4.432 4.14-4.432-4.14 1.364-1.46 2.068 1.93V8c0-1.1-.896-2-2-2z"
                                                ></path>
                                            </g>
                                        </svg>
                                        <svg
                                                viewBox="0 0 24 24"
                                                aria-hidden="true"
                                                class="r-4qtqp9 r-yyyyoo r-1xvli5t r-dnmrzs r-bnwqim r-1plcrui r-lrvibr r-1hdv0qi"
                                        >
                                            <g>
                                                <path
                                                        d="M16.697 5.5c-1.222-.06-2.679.51-3.89 2.16l-.805 1.09-.806-1.09C9.984 6.01 8.526 5.44 7.304 5.5c-1.243.07-2.349.78-2.91 1.91-.552 1.12-.633 2.78.479 4.82 1.074 1.97 3.257 4.27 7.129 6.61 3.87-2.34 6.052-4.64 7.126-6.61 1.111-2.04 1.03-3.7.477-4.82-.561-1.13-1.666-1.84-2.908-1.91zm4.187 7.69c-1.351 2.48-4.001 5.12-8.379 7.67l-.503.3-.504-.3c-4.379-2.55-7.029-5.19-8.382-7.67-1.36-2.5-1.41-4.86-.514-6.67.887-1.79 2.647-2.91 4.601-3.01 1.651-.09 3.368.56 4.798 2.01 1.429-1.45 3.146-2.1 4.796-2.01 1.954.1 3.714 1.22 4.601 3.01.896 1.81.846 4.17-.514 6.67z"
                                                ></path>
                                            </g>
                                        </svg>
                                        <svg
                                                viewBox="0 0 24 24"
                                                aria-hidden="true"
                                                class="r-4qtqp9 r-yyyyoo r-1xvli5t r-dnmrzs r-bnwqim r-1plcrui r-lrvibr r-1hdv0qi"
                                        >
                                            <g>
                                                <path
                                                        d="M8.75 21V3h2v18h-2zM18 21V8.5h2V21h-2zM4 21l.004-10h2L6 21H4zm9.248 0v-7h2v7h-2z"
                                                ></path>
                                            </g>
                                        </svg>
                                        <svg
                                                viewBox="0 0 24 24"
                                                aria-hidden="true"
                                                class="r-4qtqp9 r-yyyyoo r-1xvli5t r-dnmrzs r-bnwqim r-1plcrui r-lrvibr r-1hdv0qi"
                                        >
                                            <g>
                                                <path
                                                        d="M12 2.59l5.7 5.7-1.41 1.42L13 6.41V16h-2V6.41l-3.3 3.3-1.41-1.42L12 2.59zM21 15l-.02 3.51c0 1.38-1.12 2.49-2.5 2.49H5.5C4.11 21 3 19.88 3 18.5V15h2v3.5c0 .28.22.5.5.5h12.98c.28 0 .5-.22.5-.5L19 15h2z"
                                                ></path>
                                            </g>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>


                <?php endforeach; ?>


            <?php endif; ?>


        </section>

        <section>

            <div class="profile-who-to-follow-section">
                <div class="profile-section-header">
                    <h6>Who to follow</h6>
                </div>
                <div class="channels-wrapper">

                    <?php $channels = User::get_all(); ?>
                    <?php foreach ($channels as $channel): ?>
                        <?php if ($channel->id != $user_id = Cookie::get('user_id')): ?>


                            <div class="channel-wrapper">

                                <div class="channel-logo-wrapper">
                                    <img class="channel-logo" src="images/<?= $channel->image ?>"
                                         alt="<?= $channel->username; ?> logo"/>
                                </div>

                                <div class="channel-body">
                                    <div class="channel-item channel-info">
                                        <div class="channel-name"><?= $channel->username ?></div>
                                        <div class="dimmed-text">@<?= $channel->username ?></div>
                                    </div>

                                    <?php if ($user->is_following($channel->id)): ?>
                                        <?php
                                        $arr = ['user_id' => $user_id, 'following' => $channel->id];
                                        $follow = Follow::get_by($arr);
                                        ?>
                                        <a href="src/includes/following_user.php?unfollow=<?= $follow->id ?>"
                                           class="btn follow-btn">Unfollow</a>
                                    <?php else: ?>
                                        <a href="src/includes/following_user.php?follow=<?= $channel->id ?>"
                                           class="btn follow-btn">Follow</a>
                                    <?php endif; ?>
                                    <!--                            TODO:CHANNEL DESCRIPTION $USER->DESCRIPTION-->
                                    <div class="channel-item channel-description">Daily tips on PHP</div>

                                </div>
                            </div>

                        <?php endif; ?>
                    <?php endforeach; ?>

                </div>

                <div class="show-more-btn hashtag">Show more</div>
            </div>

        </section>
    </main>

    <?php require_once("partials/aside.php") ?>
    <?php require_once("partials/footer.php") ?>

