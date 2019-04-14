<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;


class Product extends Model
{
    const TYPE_SECKILL='seckill';
    const TYPE_NORMAL='normal';

    public static $typeMap = [
        self::TYPE_NORMAL=>'普通商品',
        self::TYPE_SECKILL=>'秒杀商品',
    ];

    protected $fillable = [
        'title','description','image','on_sale',
        'rating','sold_count','review_count','price','type',
    ];

    protected $casts = [
        'on_sale' => 'boolean'
    ];

    //与商品sku关联
    public function skus()
    {
        return $this->hasMany(ProductSku::class);
    }

    public function getImageUrlAttribute()
    {
        //如果image字段本身就已经是完整的url就直接返回
        if (Str::startsWith($this->attributes['image'], ['http://', 'https://'])) {
            return $this->attributes['image'];
        }
        return \Storage::disk('public')->url($this->attributes['image']);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function seckill()
    {
        return $this->hasOne(SeckillProduct::class);
    }
}
