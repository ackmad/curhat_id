<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Visits extends Model
{
    protected $table = 'visits';
    protected $fillable = ['aksi', 'tanggal_aksi', 'story_id'];

    public function story()
    {
        return $this->belongsTo(\App\Models\Stories::class, 'story_id');
    }
}
