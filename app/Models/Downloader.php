<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Downloader extends Model
{
    protected $fillable = ['name', 'phone_number', 'email' , 'company'];
}
