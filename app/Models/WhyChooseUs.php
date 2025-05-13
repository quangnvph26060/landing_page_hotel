<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WhyChooseUs extends Model
{
    use HasFactory;
    protected $table = 'why_choose_us';

    // Nếu bạn muốn cho phép cập nhật các trường này:
    protected $fillable = [
        'reason',
        'video_1_url',
        'video_2_url',
    ];
}
