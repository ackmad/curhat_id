<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Stories extends Model
{
    protected $table = 'stories';
    protected $fillable = ['judul', 'isi', 'kategori', 'mood'];

    public function visits()
    {
        return $this->hasMany(\App\Models\Visits::class, 'story_id');
    }
}
