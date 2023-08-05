<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    /**
     * コメントテーブルNとなるリレーション設定
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function comments(): object
    {
        return $this->hasMany('App\Comments');
    }

    /**
     *カテゴリーテーブルが1となるリレーション設定
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category()
    {
        return $this->belongsTo('App\Category');
    }
}