<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Loss extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'loss';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'product_id', 'quantity', 'price'
    ];

    /**
     * Get the product that owns the loss.
     */
    public function provider()
    {
        return $this->belongsTo('App\Product');
    }
}