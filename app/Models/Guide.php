<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guide extends Model
{
     protected $table = 'guides';

    protected $fillable = [
        'category_id', 'title', 'slug', 'content'
    ];

    public function category()
    {
        return $this->belongsTo(GuidesCategory::class, 'category_id');
    }
}
