<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Routes extends Model
{
    protected $fillable = [
        'route_name'
    ];

    public $timestamps = false;
}
