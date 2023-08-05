<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    /**
     * カテゴリーテーブルがNとなるリレーション設定
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function posts(): object
    {
        return $this->hasMany('App\Post');
    }
}