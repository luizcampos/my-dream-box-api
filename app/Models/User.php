<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    public $timestamps = false;
    protected $fillable = [
        'usuario_nome',
        'usuario_email',
        'usuario_senha'
    ]; //campos que vão poder receber informações


    public function store(){
        /*return $this->hasMany(Goal::class);*/
    }


    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     * protected $hidden = [
     * 'password'
     * ;
    */
}
