<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Condicion extends Model
{
    use SoftDeletes;
    use HasFactory;

    protected $table = "Condicion";
    protected $primaryKey = "CondicionID";
}
