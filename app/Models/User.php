<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Facades\Auth;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function tweets()
    {
        return $this->hasMany(Tweet::class, 'user_id');
    }
    public function retweets()
    {
        return $this->hasMany(Retweet::class, 'user_id');
    }

    public function followers()
    {
        return $this->hasMany(Follow::class, 'followed_user_id');
    }
    public function following()
    {
        return $this->hasMany(Follow::class, 'following_user_id');
    }

    public function scopeExcludeAuth($query) {
        return $query->whereNotIn('id', [Auth::user()->id]);

    }
    public function getRetweetedTweets()
    {
        $userRetweets = $this->retweets;
        $retweetsObj = [];
        foreach($userRetweets as $userRetweet) {
            $retweetsObj[] = Tweet::find($userRetweet['tweet_id']);
        }
        return $retweetsObj;
    }
}
