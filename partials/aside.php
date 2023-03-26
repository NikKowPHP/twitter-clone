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