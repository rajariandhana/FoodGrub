<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

// class kategori extends Model
class Kategori
{
    // use HasFactory;
    private static $kategori = [
        [
            "ide"=>"1",
            "nama"=>"nasi",
            "desc"=>"nasi goreng etc"
        ],
        [
            "ide"=>"2",
            "nama"=>"mie",
            "desc"=>"mie goreng etc"

        ],
        [
            "ide"=>"3",
            "nama"=>"ayam",
            "desc"=>"ayam goreng etc"

        ]
    ];

    public static function Semua()
    {
        // static pake self, biasa pake this
        return collect(self::$kategori);
    }
    public static function Cari($ide)
    {
        $semuakategori = static::Semua();
        return $semuakategori->firstWhere('ide',$ide);
    }
}
