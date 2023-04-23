<?php

namespace App\Models;

use App\Models\Retweet;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Tweet extends Model
{
    protected $fillable = ['title','image', 'description', 'user_id', 'tags'];

    use HasFactory;

    public function scopeFilter($query, array $filters) {
        $query->where('user_id');
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function retweet()
    {
        return $this->hasMany(Retweet::class);
    }
}
