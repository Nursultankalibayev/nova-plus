<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $table ='reviews';
    protected $guarded = ['id'];
    protected $hidden = ['_token'];

    public function getUserName($id)
    {
        return User::find($id)['name'];
    }
}
