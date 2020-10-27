<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class blogPostData extends Model
{
    //
    protected $fillable = [
        'blogTitle', 'blogBody', 'blogCategory','blogAuthor',
    ];
}
