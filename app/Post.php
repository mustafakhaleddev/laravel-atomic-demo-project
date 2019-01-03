<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use MustafaKhaled\AtomicPanel\AtomicModel;
use MustafaKhaled\AtomicPanel\Fields\BelongsTo;
use MustafaKhaled\AtomicPanel\Fields\Date;
use MustafaKhaled\AtomicPanel\Fields\ID;
use MustafaKhaled\AtomicPanel\Fields\Text;
use MustafaKhaled\AtomicPanel\Fields\Trix;

class Post extends Model
{
    //
    use AtomicModel;
    protected $casts = ['publish_date'];

    public static function AtomicFields()
    {
        return [
            ID::make('id'),
            BelongsTo::make('User', 'user_id', 'User', User::class)->displayKey('name'),
            BelongsTo::make('Category', 'category_id', 'Category', Category::class)->displayKey('name'),
            Text::make('title')->rules('required'),
            Trix::make('content')->rules('required'),
            Date::make('Publish Date', 'publish_date')->rules('required'),

        ];
    }


    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }

    public function category()
    {
        return $this->belongsTo('App\Category', 'category_id');
    }

}
