<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;
    protected $table = 'teachers';
    protected $fillable = [
        'lastname',
        'firstname',
        'email',
        'phone',
        'website',
        'remarks',
        'description',
        'approved',
        'created_at',
        'updated_at',
        'category_id',
        'location_id',
        'streetnr',
        'codecity'
    ];
}