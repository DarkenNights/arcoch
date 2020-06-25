<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Loss extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];
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
    public function product()
    {
        return $this->belongsTo('App\Product');
    }
}
