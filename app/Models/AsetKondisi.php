<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AsetKondisi extends Model
{
    use HasFactory;
    protected $primaryKey = 'aset_kondisi_id';
    protected $table = 'aset_kondisi';
}
