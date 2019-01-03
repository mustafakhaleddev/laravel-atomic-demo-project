<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use MustafaKhaled\AtomicPanel\AtomicModel;
use MustafaKhaled\AtomicPanel\Fields\Email;
use MustafaKhaled\AtomicPanel\Fields\ID;
use MustafaKhaled\AtomicPanel\Fields\Password;
use MustafaKhaled\AtomicPanel\Fields\Text;

class User extends Authenticatable
{
    use Notifiable;
    use AtomicModel;

    public static function AtomicFields()
    {
        return [
          ID::make('id'),
          Text::make('name')->rules('required'),
          Email::make('email')->rules('required')->creationRules('unique:users,email')->updateRules('unique:users,email,{{modelID}}'),
          Password::make('password'),

        ];
    }



    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    public function posts()
    {
        return $this->hasMany('App\Post','post_id');
    }

}
