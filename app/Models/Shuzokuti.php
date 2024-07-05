<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Shuzokuti extends Model
{
    //テーブル名
    protected $table = 'shuzokutis';

    /**
     * ポケモンに関連するタイプを取得
     */
    public function Types()
    {
        return $this->hasOne(Type::class,'名前','ポケモン');
    }

    //可変項目
    protected $fillable =
    [ 
    ];
}
