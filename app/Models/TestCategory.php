<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TestCategory extends Model
{
    protected $table = 'test_categories';
    protected $guarded =['id'];

    protected $hidden = ['_token','created_at','updated_at'];
}
