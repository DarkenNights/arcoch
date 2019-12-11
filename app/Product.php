<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'product';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'reference', 'stock', 'buffer', 'quantity_per_carton', 'conditioning_per_carton', 'price', 'provider_id'
    ];

    /**
     * Get the provider that owns the product.
     */
    public function provider()
    {
        return $this->belongsTo('App\Provider');
    }
}
