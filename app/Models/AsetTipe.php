<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AsetTipe extends Model
{
    use HasFactory;
    protected $primaryKey = 'aset_tipe_id';
    protected $table = 'aset_tipe';
}
