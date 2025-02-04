<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use mysql_xdevapi\Table;

class FacebookPage extends Model
{
    protected $table = 'facebook_pages';
    protected $fillable = ['page_id', 'name', 'access_token'];
}
