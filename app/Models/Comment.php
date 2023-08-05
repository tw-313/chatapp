<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    /**
     * ポストテーブルが1となるリレーション設定
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function post(): object
    {
        return $this->belongsTo('App\Post');
    }
}