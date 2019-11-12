<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Firstname extends Model
{
    protected $fillable = [
        'firstname', 'user_id'
    ];

    public $timestamps = false;

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
