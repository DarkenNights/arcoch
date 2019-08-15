<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Event extends Model
{
    use SoftDeletes;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'event';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'start', 'end', 'place', 'highlight', 'text', 'creator'
    ];
    /**
     * Add dates attributes for Carbon use
     *
     * @var array
     */
    protected $dates = array('deleted_at', 'start', 'end');
}
