<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Idea extends Model
{
    use HasFactory;
    use Sluggable;

    protected $guarded = [];
    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    function user()
    {
        return $this->belongsTo(User::class);
    }
    function category()
    {
        return $this->belongsTo(Category::class);
    }
    function status()
    {
        return $this->belongsTo(Status::class);
    }
    public function votes()
    {
        return $this->belongsToMany(User::class, 'votes');
    }
    public function isVotedByUser(?User $user)
    {
        if(!$user){
            return false;
        }
        return Vote::where('user_id',$user->id)
        ->where('idea_id',$this->id)
        ->exists();
    }
}

