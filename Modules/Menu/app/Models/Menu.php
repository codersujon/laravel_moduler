<?php

namespace Modules\Menu\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Modules\Menu\Database\Factories\MenuFactory;

class Menu extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [
        // Basic Info
        'title',
        'icon',
        'url',
        'route',

        // Hierarchy & Order
        'parent_id',
        'order',
        'module',

        // Visibility & Status
        'is_active',
        'is_hidden',

        // Permissions
        'permission',
    ];

    public function children(){
        return $this->hasMany(Menu::class, 'parent_id')->orderBy('order');
    }

    public function parent(){
        return $this->belongsTo(Menu::class, 'parent_id');
    }

    // protected static function newFactory(): MenuFactory
    // {
    //     // return MenuFactory::new();
    // }
}
