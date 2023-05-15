
import React from 'react'
import CreateTweet from './CreateTweet'

export default function Main() {
	return (
		<>
        <div className="header-center-container">
            <div className="home-link-container">
                <a className="home-link" href="/home">Home</a>
            </div>
            <div id="header-buttons" className="header-buttons-container">
                <a href="#" className="header-button-link active-home-link"><span>For you</span> </a>
                <a href="#" className="header-button-link"><span> Following</span></a>
            </div>
        </div>

						<CreateTweet />

        <div className="show-new-tweets-container">
            <p>Show 425 Tweets</p>
        </div>
        


        <section className="posts">


	    {/* @unless (count($tweets) == 0) */}
            {/* @foreach($tweets as $tweet) */}

            {/* <x-card :tweet="$tweet" :retweets="$retweets" :user="$user"/>

            @endforeach */}
        {/* // @else */}
            {/* <p>No tweets found</p>
        @endunless						 */}




        </section>

		
		</>
	)
}
