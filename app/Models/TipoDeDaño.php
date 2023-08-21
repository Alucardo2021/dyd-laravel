<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TipoDeDaño extends Model
{
    use SoftDeletes;
    use HasFactory;

    protected $table = "TipoDeDaño";
    protected $primaryKey = "TipoDeDañoID";
}
