<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Follow extends Model
{
    use HasFactory;
    protected $fillable = ['followed_user_id', 'following_user_id'];


    public function followedUser()
    {
        return $this->belongsTo(User::class, 'followed_user_id');
    }
    public function followingUser()
    {
        return $this->belongsTo(User::class, 'following_user_id');
    }
    public static function getUserFollowing($userId, $channelId)
    {
        return Follow::where('followed_user_id', $userId)
                    ->where('following_user_id', $channelId)
                    ->first();
    }
}
