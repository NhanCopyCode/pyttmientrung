<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;
    protected $table = 'videos';
    protected $fillable = [
        'typeid',
        'url',
        'title',
        'typefile',
        'pathimage',
        'pathfile',
        'summary',
        'arrange',
        'postdate',
        'approved',
        'lang',
        'view',
    ];
    public $timestamps = false;
}
