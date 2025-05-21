<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $table = 'contents';
    protected $fillable = [
        'typeid',
        'other_typeid',
        'title',
        'url',
        'keywords',
        'summary',
        'content',
        'pathfile',
        'pathimage',
        'video',
        'comment',
        'postdate',
        'changedate',
        'author',
        'isfocus',
        'isShow',
        'isNew',
        'arrange',
        'approved',
        'lang',
    ];
    public $timestamps = false;
}
