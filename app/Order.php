<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'order';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'orderNumber', 'provider_id', 'product_id', 'quantity', 'price'
    ];

    /**
     * Get the provider that owns the order.
     */
    public function provider()
    {
        return $this->belongsTo('App\Provider');
    }

    /**
     * Get the product that owns the order.
     */
    public function product()
    {
        return $this->belongsTo('App\Product');
    }
}
