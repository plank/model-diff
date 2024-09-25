<?php

namespace Plank\ModelDiff\Tests\Support\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use SoftDeletes;

    protected $guarded = ['id'];

    protected $revisionMeta = ['excerpt'];

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
