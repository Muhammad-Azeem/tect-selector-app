<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Phase extends Model
{
    protected $fillable =['name'];
    /**
     * @var mixed
     */


    public function questions()
    {
        return $this->hasMany(Question::class);
    }




}
