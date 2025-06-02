<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SysAttributes extends Model
{
    use HasFactory;

    protected $table = 'sys_attributes';
    protected $fillable = [
        'title',
        'approved',
        'lang',
        'keyword',
        'groupid'
    ];
    public $timestamps = false;
   


}