<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SupportCategory extends Model
{
    use HasFactory;
     protected $fillable = ['name', 'slug', 'parent_id'];

    public function parent()
    {
        return $this->belongsTo(SupportCategory::class, 'parent_id');
    }

    public function children()
    {
        return $this->hasMany(SupportCategory::class, 'parent_id');
    }
}
