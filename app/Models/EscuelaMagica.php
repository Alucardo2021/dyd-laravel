<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class EscuelaMagica extends Model
{
    use SoftDeletes;
    use HasFactory;

    protected $table = "EscuelaMagica";
    protected $primaryKey = "EscuelaMagicaID";
}
