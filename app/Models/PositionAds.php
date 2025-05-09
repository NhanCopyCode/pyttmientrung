<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PositionAds extends Model
{
    use HasFactory;
    protected $table = 'ads_pos';
    protected $fillable = [
        'title',
        'comment',
        'image',
        'approved',
        'arrange',
    ];
    public $timestamps = false;
}
