<?php

namespace App\Models;

use App\User;

use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    protected $fillable = ['user_id','user_type_id','data'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function userType()
    {
        return $this->belongsTo(UserType::class);
    }
    public function activityProducts()
    {
        return $this->belongsToMany(Product::class);
    }



}
