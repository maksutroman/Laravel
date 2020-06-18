<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    protected $fillable = [
        'id', 'autor_name', 'title', 'body', 'avatar'
    ];
}
