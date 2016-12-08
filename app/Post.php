<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property mixed id
 */
class Post extends Model
{
    protected $fillable = array('title', 'body');
}
