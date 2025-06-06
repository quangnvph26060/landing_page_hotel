<?php

namespace App\Models;

use App\Models\Template;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Automation extends Model
{
    use HasFactory;
    protected $guarded = [];
    public $timestamps = true;

    public function template()
    {
        return $this->belongsTo(Template::class);
    }
}
