<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class News extends Model
{
    use HasFactory;
    protected $table = 'news';

    public function categories()
    {
        return $this->hasMany(NewsCategory::class, 'news_id', 'id');
    }

    public function countries()
    {
        return $this->hasMany(NewsCountry::class, 'news_id', 'id');
    }

    public function creators()
    {
        return $this->hasMany(NewsCreator::class, 'news_id', 'id');
    }

    public function news_keywords()
    {
        return $this->hasMany(NewsKeyword::class, 'news_id', 'id');
    }

    public function getCreatorNameAttribute()
    {
        $source = ucfirst($this->source_id);
        $name = "";
        if (count($this->creators) > 0) {
            foreach ($this->creators as $key => $creator) {
                $name = ucfirst($creator->creator);
            }

            $source = $source.' - '.$name;
        }

        return $source;
    }

    public function getImageBgAttribute()
    {
        $url = asset('/images/default.jpg');
        if ($this->image_url) {
            $url = $this->image_url;
        }

        return $url;
    }

    public function getPublishedDateFormattedAttribute()
    {
        return Carbon::parse($this->published_date)->format('l, d F Y');
    }

}
