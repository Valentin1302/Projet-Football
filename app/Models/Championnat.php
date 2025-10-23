<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Championnat extends Model
{
    protected $table = 'championnats';

    protected $fillable = [
        'nom',
        'pays',
        'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
