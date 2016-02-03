<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = [
      'name', 'date',
    ];

    public function user()
    {
      return $this->belongTo(User::class);
    }
}
