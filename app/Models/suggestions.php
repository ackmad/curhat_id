<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Suggestions extends Model
{
    protected $fillable = ['nama', 'email', 'kategori', 'pesan'];
}
