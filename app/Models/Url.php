<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Ramsey\Uuid\Guid\Guid;

class Url extends Model
{
    use HasFactory;
    protected $guarded = [];
}
