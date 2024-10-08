<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $table = "posts";

    protected $primaryKey = "post_id";

    public $timestamps = false;

    public function post()
    {
        return $this->hasMany(Comments::class);
    }


}
