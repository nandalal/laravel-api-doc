<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'product_name'
    ];

    public $table = 'product';
    
    protected $hidden = ['created_at', 'updated_at'];
}
