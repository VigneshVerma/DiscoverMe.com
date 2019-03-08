<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class user_details extends Model
{
    protected $table = 'user_details';

    protected $primarykey = 'user_name';

    public $timestamps = true;
}
