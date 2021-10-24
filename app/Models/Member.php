<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;

    protected $fillable = [
        'fullname',
        'birthdate',
        'email',
        'contact_number',
        'date_started',
    ];


    public function scopeSearch($query, $string) 
    {
        return $query->where('fullname', 'like', "%{$string}%");
    }
}