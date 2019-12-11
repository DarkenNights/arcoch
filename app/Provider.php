<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Provider extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'provider';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'short_name', 'color', 'email', 'franco', 'order_day', 'shipping_day', 'address', 'commercial', 'phone'
    ];

    /**
     * Get the products for the provider.
     */
    public function products()
    {
        return $this->hasMany('App\Product');
    }
}
