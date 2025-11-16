<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    // Tell Laravel the table name is 'admin', not 'admins'
    protected $table = 'admin';

    // If you are not using timestamps
    public $timestamps = false;
}
