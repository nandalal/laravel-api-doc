<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'state_id', 'name'
    ];

    public $table = 'district';

    
    protected $hidden = ['created_at', 'updated_at'];
}
