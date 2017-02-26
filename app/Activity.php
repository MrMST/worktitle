<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    protected $table = 'activity';
    
    /**
     * The products that belong to the shop.
     */
    public function users()
    {
        return $this->belongsToMany('User');
    }
}
