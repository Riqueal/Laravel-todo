<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = ['name', 'complete'];  /* permitindo o preenchimento dos campos name e complete */
}
