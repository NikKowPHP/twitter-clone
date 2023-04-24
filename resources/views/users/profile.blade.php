@extends('components.layout')



@section('main')
<div class="content-container">
    <main class="profile-main">

        <div class=" profile-header-top">

            <div class="profile-header-top-sticky-wrapper">
                <a class="home-link" href="/home">
                    <svg viewBox="0 0 24 24" aria-hidden="true"
                         class="r-18jsvk2 r-4qtqp9 r-yyyyoo r-z80fyv r-dnmrzs r-bnwqim r-1plcrui r-lrvibr r-19wmn03">
                        <g>
                            <path d="M7.414 13l5.043 5.04-1.414 1.42L3.586 12l7.457-7.46 1.414 1.42L7.414 11H21v2H7.414z"></path>
                        </g>
                    </svg>
                </a>
                <div class="profile-header-top-credentials">
                    <div class="profile-header-top-username"> {{$user->name}} </div>

                    <div class="profile-header-top-tweets">{{ $user->tweets->count() }} Tweets</div>
                </div>
            </div>

            <div class="profile-header-background">
                <img src=" {{asset('storage/')}}  " alt="user background">
                {{-- TODO: $user->background --}}
            </div>


            <div class="profile-header-user-info">
                <div class="profile-header-photo-wrapper">
                    <div class="profile-header-photo-container">
                        <img src="{{asset('storage/' . $user->image )}}" alt="user image">
                    </div>
                    <button class="btn" id="edit_profile_open">Edit profile</button>
                </div>
                <div class="profile-header-user">
                    <div class="profile-header-top-username">{{$user->name}}</div>
                    <div class="profile-header-user-link dimmed-text">@  {{$user->name}}</div>
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
                    <div class="profile-follow"><span>{{ $user->following->count() }} </span>Following</div>
                    <div class="profile-follow"><span> {{$user->followers->count() }}</span>Followers</div>
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
            @foreach($tweets as $tweet)

                <x-card :tweet="$tweet" :user="$user" />

            @endforeach
        </section>

        <section>

                @foreach($retweets as $retweet)
                @php
                    $userRetweeted = true;
                @endphp

                <x-card :tweet="$retweet" :user="$user" userRetweeted={{'true'}}  />

                @endforeach

        </section>

        <section>

            <div class="profile-who-to-follow-section">
                <div class="profile-section-header">
                    <h6>Who to follow</h6>
                </div>
                <div class="channels-wrapper">


                    @foreach ($channels as $channel)

                            <div class="channel-wrapper">

                                <div class="channel-logo-wrapper">
                                    <img class="channel-logo" src="{{asset('storage/'. $channel->image)}}"
                                         alt="channel image"/>
                                </div>

                                <div class="channel-body">
                                    <div class="channel-item channel-info">
                                        <div class="channel-name"><a href="/users/profile/{{$channel->id}}">{{$channel->name}}</a></div>
                                        <div class="dimmed-text">@ <a href="/users/profile/{{$channel->id}}">{{$channel->name}}</a></div>
                                    </div>
                                    @if ($follow = App\Models\Follow::getUserFollowing(Auth::user()->id, $channel->id))

                                        <form action="/users/follow/ {{ $follow->id }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-follow" type="submit">Unfollow</button>
                                        </form>
																		
                        @else
                                <form action="{{ '/users/follow/'. $channel->id }}" method="post">
                                    @csrf
                                    <button class="btn btn-follow" type="submit">Follow</button>
                                </form>
																		
						@endif
                                    <!--                            TODO:CHANNEL DESCRIPTION $USER->DESCRIPTION-->
                                    <div class="channel-item channel-description">Daily tips on PHP</div>

                                </div>
                            </div>
                        @endforeach


                </div>

                <div class="show-more-btn hashtag">Show more</div>
            </div>

        </section>
    </main>

    @endsection



