<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Carousel extends Model
{
    protected $table ='carousels';

    protected $guarded =['id','_token'];

    protected $hidden = ['created_at', 'updated_at', 'deleted_at'];

}
