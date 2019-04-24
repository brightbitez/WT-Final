<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{

    protected $fillable = [
        'id'
    ];

    public function menus(){
        return $this->belongsToMany(\App\Menu::class,'menu_order');
    }
}
