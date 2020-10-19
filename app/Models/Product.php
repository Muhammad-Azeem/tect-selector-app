<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable =['title','desc','price','download_link','icon_link','logical_expression'];

    protected $casts = ['logical_expression' => 'array'];
    public function activityProducts()
    {
        return $this->belongsToMany(Activity::class);
    }
}
