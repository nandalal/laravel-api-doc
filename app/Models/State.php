<?php

namespace App\Models;

use App\Models\District;
use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name'
    ];

    public $table = 'state';

    
    protected $hidden = ['created_at', 'updated_at'];


    public function district()
    {
        return $this->belongsTo(District::class, 'district_id', 'id');
    }
}
