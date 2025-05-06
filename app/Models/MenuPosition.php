<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MenuPosition extends Model
{
    use HasFactory;
    protected $table = 'menu_position';
    protected $fillable = [
        'position_id',
        'menu_id',

    ];
    public $timestamps = false;
}
