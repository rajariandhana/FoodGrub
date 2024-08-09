<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order_menu extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public function order()
    {
        return $this->belongsTo(Order::class,'order_id');
    }
    // public function menu()
    // {
    //     return $this->belongsTo(Menu::class,'menu_id');
    // }
    public function menu()
    {
        return $this->belongsTo(Menu::class);
    }
}
