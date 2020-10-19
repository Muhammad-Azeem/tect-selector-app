<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $fillable = ['title','meta', 'phase_id'];

    protected $casts = [
        'meta' => 'array',
    ];

    public function phase()
    {
        return $this->belongsTo(Phase::class);
    }
    public function answers()
    {
        return $this->hasMany(Answer::class);
    }


}
