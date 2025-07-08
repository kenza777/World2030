<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    protected $fillable = [
        'match_id',
        'ticket_code',
        'price',
        'category',
        'is_reserved',
    ];

    public function game()
    {
        return $this->belongsTo(Game::class);
    }

    public function reservation()
    {
        return $this->hasOne(Reservation::class);
    }
}
