<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FlashSlide extends Model
{
    use HasFactory;

    protected $table = 'flashslide';
    protected $fillable = [
        'typeid',
        'title',
        'link',
        'pathimage', // sửa luôn lỗi tab ở đây nè
        'pubdate',
        'postdate',
        'author',
        'approved',
        'lang',
        'arrange'
    ];
    public $timestamps = false;
}
