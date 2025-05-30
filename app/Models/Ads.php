<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ads extends Model
{
    use HasFactory;
    protected $table = 'ads';
    protected $fillable = [
        'vitri',
        'link',
        'title',
        'type',
        'pathimage',
        'comment',
        'arrange',
        'approved',
        'lang',
    ];
    public $timestamps = false;

    public function position()
    {
        return $this->belongsTo(AdsPosition::class, 'vitri');
    }
}
