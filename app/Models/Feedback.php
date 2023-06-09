<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    use HasFactory;

    protected $table = 'feedbacks';
    protected $fillable = [
        'userId',
        'internshipId',
        'comment',
        'rating',
    ];
    public function internship()
    {
        return $this->belongsTo(Internship::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
