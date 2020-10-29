<?php

namespace App\Models\Car;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OwnersModel extends Model
{
    use HasFactory;
    protected $table = 'car_owners';
}
