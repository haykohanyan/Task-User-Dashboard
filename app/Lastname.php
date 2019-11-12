<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lastname extends Model
{
    protected $fillable = [
        'lastname', 'user_id'
    ];

    public $timestamps = false;

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
