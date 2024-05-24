<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'image',
        'name',
        'descriptions',
        'dateStart',
        'dateEnd',
        'timeStart',
        'timeEnd',
        'locations',
        'price',
        'old_price',
    ];

    public function user(){
        return $this->belongsToMany(User::class, 'eventsusers');
    }
}
