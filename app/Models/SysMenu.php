<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SysMenu extends Model
{
    use HasFactory;

    protected $table = 'sys_menu';
    protected $fillable = [
        'ptypeid',
        'title',
        'url',
        'keyword',
        'content',
        'arrange',
        'position',
        'approved',
        'lang',
        'pathimage',
        'functionid',

    ];
    public $timestamps = false;
    public function children()
    {
        return $this->hasMany(SysMenu::class, 'ptypeid')
            ->where('approved', 1)
            ->orderBy('arrange');
    }

    public function parent()
    {
        return $this->belongsTo(SysMenu::class, 'ptypeid');
    }

    public function positions()
    {
        return $this->belongsToMany(SysPosition::class, 'menu_position', 'menu_id', 'position_id');
    }

    public function getPositionsAttribute()
    {
        if (!$this->position) return collect();

        $ids = array_filter(explode(',', $this->position));
        return \App\Models\SysAttributes::whereIn('id', $ids)->get();
    }

    public function posts()
    {
        return $this->hasMany(Post::class, 'typeid', 'id');
    }
}
