<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class question extends Model
{
    protected $fillable=[
        'Insert_question','Option_A','Option_B','Option_C'
    ];
}
