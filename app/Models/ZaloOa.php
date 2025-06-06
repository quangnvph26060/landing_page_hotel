<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ZaloOa extends Model
{
    use HasFactory;
    protected $table = 'zalo_oas';
    protected $guarded = [];
    public $timestamps = true;
}
