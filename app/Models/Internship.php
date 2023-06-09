<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Internship extends Model
{
    use HasFactory;

    protected $table = 'internships';
    protected $fillable = [
        'name',
        'description',
        'companyId',
        'userId',
        'industryId',
        'startDate',
        'endDate',
        'payment',
        'status',
    ];
    public function company()
    {
        return $this->belongsTo(Company::class);
    }
    public function industry()
    {
        return $this->belongsTo(Industry::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
