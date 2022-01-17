<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'img',
        'text',
        'date_time',
        'user_id',
        //'link',
    ];

    //Eloquent relations
    public function author() {
        return $this->belongsToMany(User::class);
    }

}
