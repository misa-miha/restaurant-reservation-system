<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    use HasFactory;

    protected $fillable = [
        'genre_id',
        'prefecture_id',
        'restaurant_name',
        'introduction',
        'image_path'
    ];

    public function genre()
    {
        return $this->belongsTo(Genre::class);
    }

    public function prefecture()
    {
        return $this->belongsTo(Prefecture::class);
    }

    public function reservations()
    {
        return $this->hasMany(Reservation::class);
    }

    public function favorites()
    {
        return $this->hasMany(Favorite::class);
    }

    public function scopePrefectureSearch($query, $prefecture_id)
    {
        if (!empty($prefecture_id)) {
            $query->where('prefecture_id', $prefecture_id);
        }
        return $query;
    }

    public function scopeGenreSearch($query, $genre_id)
    {
        if (!empty($genre_id)) {
            $query->where('genre_id', $genre_id);
        }
        return $query;
    }

    public function scopeKeywordSearch($query, $keyword)
    {
        if (!empty($keyword)) {
            $query->where('restaurant_name', 'like', '%' . $keyword . '%');
        }
        return $query;
    }
}
