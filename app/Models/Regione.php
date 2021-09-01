<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Regione extends Model
{
    protected $fillable=['codigo','nombre'];
    use HasFactory;
}
