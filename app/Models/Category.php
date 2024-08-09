<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function menus()
    {
        return $this->hasMany(Menu::class);
    }
    public static function tipe()
    {
        return "h";
    }
    public static function tip()
    {
        $daftar_menu = menus();
    }
    // protected $fillable = ['nama','slug'];
}
