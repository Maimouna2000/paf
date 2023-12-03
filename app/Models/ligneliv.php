<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ligneliv extends Model
{
    use HasFactory;
    protected $fillable = [
        'qteliv',
        'prixliv',
        'dateliv',
    ];
}
