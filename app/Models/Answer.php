<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    protected $fillable =['title','meta','question_id'];

    protected $casts = [
        'meta' => 'array'
    ];

    public function question()
    {
        return $this->belongsTo(Question::class);
    }
}
