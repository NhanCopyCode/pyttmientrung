<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SysPosition extends Model
{
    use HasFactory;
    protected $table = 'sys_position';
    protected $fillable = [
        'title',
        'approved',

    ];
    public $timestamps = false;
}
