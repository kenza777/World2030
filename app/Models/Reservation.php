<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $fillable = [
        'user_id',
        'ticket_id',
        'seat_number',
        'reservation_date',
        'status'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

     public function game()
    {
        return $this->belongsTo(Game::class);
    }

    public function ticket()
    {
        return $this->belongsTo(Ticket::class);
    }
}
