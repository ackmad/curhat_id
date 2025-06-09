<?php
namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
    protected $fillable = [
        'nama', 'username', 'password', 'email', 'nohp', 'hobi', 'bagian', 'alamat'
    ];

    protected $hidden = [
        'password',
    ];
}