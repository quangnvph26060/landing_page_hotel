<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GuidesCategory extends Model
{
  protected $table = 'guides_categories';

    protected $fillable = [
        'name', 'slug'
    ];

    public function guides()
    {
        return $this->hasMany(Guide::class, 'category_id');
    }
}
