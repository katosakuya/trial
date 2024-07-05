<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    //テーブル名
    protected $table = 'types';

    /**
     * このタイプを所有するポケモンを取得
     */
    public function Shuzokuti()
    {
        return $this->belongsTo(Shuzokuti::class,'名前','ポケモン');
    }

    //可変項目
    protected $fillable =
    [
    ];
}
