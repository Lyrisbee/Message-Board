<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    /**
     * 與模型關聯的資料表。
     *
     * @var string
     */
    protected $table = 'post';

    public $timestamps = false;

    public function users() {
        return $this->belongsTo('App\User');
    }
}
