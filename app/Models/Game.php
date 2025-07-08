<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    protected $fillable = [
        'team_home_id',
        'team_away_id',
        'stadium_id',
        'match_date',
        'match_time',
        'status'
    ];

    public function stadium()
    {
        return $this->belongsTo(Stadium::class);
    }

    public function homeTeam()
    {
        return $this->belongsTo(Team::class, 'team_home_id');
    }

    public function awayTeam()
    {
        return $this->belongsTo(Team::class, 'team_away_id');
    }

    public function tickets()
    {
        return $this->hasMany(Ticket::class);
    }
}
