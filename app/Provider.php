<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Provider extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];

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

    /**
     * Get the orders for the provider.
     */
    public function orders()
    {
        return $this->hasMany('App\Order');
    }

    /**
     * Get the losses for the provider.
     */
    public function losses()
    {
        return $this->hasMany('App\Loss');
    }
}
