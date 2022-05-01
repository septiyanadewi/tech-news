<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewsKeyword extends Model
{
    use HasFactory;
    protected $table = 'keywords';

    public function news()
    {
        return $this->belongsTo(News::class);
    }
}
