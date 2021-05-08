<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Courier extends Model
{
    protected $fillable = [
        'name', 'code_name', 'routes', 'password'
    ];
    public $timestamps = false;
}
