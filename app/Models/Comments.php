<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    use HasFactory;

    protected $table = "comments";

    protected $primaryKey = "comment_id";

    public $timestamps = false;


    public function comments()
    {
        return $this->belongsTo(Post::class);
    }
}
