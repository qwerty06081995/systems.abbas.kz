<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];



    public function roles(){
        return $this->belongsToMany(Role::class, 'user_roles');
    }

    public function isAdmin(){
        return $this->roles()->where('name', 'Admin')->exists();
    }

    public function isUser(){
        $user = $this->roles()->where('name', 'User')->exists();
        if ($user){
            return "user";
        }
    }
    public function isOperator(){
        $user = $this->roles()->where('name', 'Operator')->exists();
        if ($user){
            return "operator";
        }
    }
    public function isModerator(){
        $user = $this->roles()->where('name', 'Moderator')->exists();
        if ($user){
            return "moderator";
        }
    }
    public function isCourier(){
        $user = $this->roles()->where('name', 'Courier')->exists();
        if ($user){
            return "courier";
        }
    }
    public function isStore(){
        $user = $this->roles()->where('name', 'Store')->exists();
        if ($user){
            return "store";
        }
    }
}
