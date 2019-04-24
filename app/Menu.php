<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $fillable = ['id', 'name','price','calories','description'];

    public function orders(){
        return $this->belongsToMany(\App\Order::class,'menu_order');
    }

}
