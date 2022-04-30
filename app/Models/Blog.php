<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Database\Factories\BlogFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    use Sluggable;

    protected $fillable = [
        'title','description','user_id','image',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable');
    }
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

}
