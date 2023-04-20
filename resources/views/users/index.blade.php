@extends('components.layout')



@section('main')

        <div class="header-center-container">
            <div class="home-link-container">
                <a class="home-link" href="/home">Home</a>
            </div>
            <div id="header-buttons" class="header-buttons-container">
                <a href="#" class="header-button-link active-home-link"><span>For you</span> </a>
                <a href="#" class="header-button-link"><span> Following</span></a>
            </div>
        </div>

              @include('partials._create_tweet')

        <div class="show-new-tweets-container">
            <p>Show 425 Tweets</p>
        </div>
        


        <section class="posts">


	    @unless (count($tweets) == 0)
            @foreach($tweets as $tweet)

            <x-tweet-card :tweet="$tweet"/>

            @endforeach
        @else
            <p>No tweets found</p>
        @endunless						




        </section>

@endsection


