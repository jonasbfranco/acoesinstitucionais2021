<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class funcionario extends Model
{
    // se nao for usar migrations
    // public $timestamps = false;
    use HasFactory;

    protected $guarded = [];

}
