<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

    class Stadium extends Model
{
    protected $table = 'stadiums'; // très important
    protected $fillable = ['name', 'location', 'capacity','image_path'];

    public function Game()
    {
        return $this->hasMany(Game::class);
    }
}
