<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdsPosition extends Model
{
    use HasFactory;
    protected $table = 'ads_pos';
    public $timestamps = false;
    protected $fillable = [
        'title',
        'comment',
        'arrange',
        'approved',
        'image',
    ];
    public function ads() {
        return $this->belongsToMany(Ads::class, 'ads_pos', 'vitri', 'id');
    }
}
