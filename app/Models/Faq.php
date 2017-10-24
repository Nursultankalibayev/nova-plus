<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Faq extends Model
{
    protected $table ='faqs';
    protected $guarded =['id'];

    protected $hidden = ['_token'];

    public function getUserName($id)
    {
        return User::find($id)['name'];
    }
}
