<?php

namespace App\Models;

use App\Models\Tweet;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Retweet extends Model
{
    use HasFactory;

    public function tweet()
    {
        return $this->belongsTo(Tweet::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}