<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewsCreator extends Model
{
    use HasFactory;
    protected $table = 'creators';

    public function news()
    {
        return $this->belongsTo(News::class);
    }
}
