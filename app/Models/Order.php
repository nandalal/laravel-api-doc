<?php

namespace App\Models;

use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'product_id', 'customer_id', 'quantity', 'rate', 'total_rate'
    ];

    public $table = 'order';

    // protected $appends = ['totalRate'];


    // /**
    //  * Get Total Attribute
    //  * @return mixed
    //  */
    // public function getTotalRateAttribute()
    // {
    //     return $this->quantity * $this->rate;
    // }
    

    public function customer()
    {
        return $this->belongsTo(User::class, 'customer_id', 'id');
    }
    

    public function productList()
    {
        return $this->belongsTo(Product::class, 'product_id', 'id');
    }

}
