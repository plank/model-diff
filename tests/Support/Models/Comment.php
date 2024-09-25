<?php

namespace Plank\ModelDiff\Tests\Support\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $guarded = ['id'];

    public function comments()
    {
        return $this->belongsTo(Post::class);
    }
}
