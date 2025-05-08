<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faq extends Model
{
    use HasFactory;
    protected $table = 'faq';
    protected $fillable = [
        'typeid',
        'nameq',
        'namea',
        'email',
        'title',
        'question',
        'answer',
        'postdate',
        'changedate',
        'approved',
        'lang',

    ];
    public $timestamps = false;
}
