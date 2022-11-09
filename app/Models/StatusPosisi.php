<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StatusPosisi extends Model
{
    use HasFactory;
    protected $primaryKey = 'status_posisi_id';
    protected $table = 'status_posisi';
}
