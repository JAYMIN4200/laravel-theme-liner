<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    use HasFactory;

    protected $fillable = ['email', 'password', 'address', 'address2', 'city', 'state', 'zip', 'date', 'remember_me'];

}
