<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Goal extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'goal_title',
        'goal_cash_total', 
        'goal_date', 
        'goal_cash_today'
    ]; //campos que vão poder receber informações

    public function store(){
        /*return $this->belongsTo(Usuario::class);*/
    }
}
