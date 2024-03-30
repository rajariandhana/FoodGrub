<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
// class Menu
{
    use HasFactory;
    // protected $fillable = ['nama','harga','desc'];
    protected $guarded = ['id'];
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    // private static $daftar_menu = [
    //     [
    //         "nama"=>"nasi goreng seafood",
    //         "harga"=>20000,
    //         "desc"=>"nasgor seafod enak"
    //     ],
    //     [
    //         "nama"=>"nasi goreng seafood",
    //         "harga"=>20000,
    //         "desc"=>"nasgor seafod enak"
    //     ]
    // ];
    // public static function all()
    // {
    //     return collect(self::$daftar_menu);
    // }
    // public static function find($slug)
    // {
    //     $menus = static::all();
    //     return $menus->firstWhere('slug',$slug);
    // }
}
