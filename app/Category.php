<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use MustafaKhaled\AtomicPanel\AtomicModel;
use MustafaKhaled\AtomicPanel\Fields\HasMany;
use MustafaKhaled\AtomicPanel\Fields\ID;
use MustafaKhaled\AtomicPanel\Fields\Text;

class Category extends Model
{
    //

    use AtomicModel;

    public static function AtomicFields()
    {
        return [
            ID::make('id'),
            Text::make('name')->rules('required'),
            HasMany::make('Posts', 'Post', Post::class),
        ];
    }


    public function posts()
    {
        return $this->hasMany('App\Post', 'category_id');
    }

}
