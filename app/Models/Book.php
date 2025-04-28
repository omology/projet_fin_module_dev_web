<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\belongsTo;
use App\Models\User;

class Book extends Model
{
    protected $fillable = [
        'title',
        'description',
        'user_id',
        'ISBN',
        'authorName',
        'price',
        'adress',
        'Rating',
        'ImgPath',
        'category',
    ];
    public static array $categories = ['math','physics','islam','cyber Security','other'];

    public function user():belongsTo
    {
        return $this->belongsTo(User::class);
    }

}
