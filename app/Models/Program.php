<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'code',
        'description',
        'price',
        'price_updated',
    ];

    public function members()
    {
        return $this->belongsToMany(Member::class)
            ->withPivot(['start_date', 'end_date'])
            ->as('period');
    }
}
