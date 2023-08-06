<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Roznamcha extends Model
{
    protected $fillable = [
        'country',
        'user_id',
        'total_name',
        'sr_no',
        'detail',
        'afghani_date',
        'date',
        'afghani',
        'afghani_total',
        'pakistani_total',
        'image',
    ];
    use HasFactory;
}
