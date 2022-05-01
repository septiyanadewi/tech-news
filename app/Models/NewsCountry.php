<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewsCountry extends Model
{
    use HasFactory;
    protected $table = 'countries';

    public function news()
    {
        return $this->belongsTo(News::class);
    }
}
