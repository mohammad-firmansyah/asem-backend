<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Afdelling extends Model
{
    use HasFactory;
    protected $primarykey = "afdelling_id";
    protected $table = "afdelling";

}
