<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Character extends Model
{
    //テーブル名
    protected $table = 'characters';

    //可変項目
    protected $fillable = [
        'name',
        'english_name',
        'attributes_id',
        'categories_id',
        'ls1_categories_id',
        'ls1_multiplier',
        'ls2_categories_id',
        'ls2_multiplier',
        'ls3_categories_id',
        'ls3_multiplier',
        'ls_attributes_id',
        'ls_attributes_multiplier',
        'ls1_200',
        'ls2_200',
        'ls3_200',
    ];
}
