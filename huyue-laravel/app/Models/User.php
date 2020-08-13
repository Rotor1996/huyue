<?php

namespace App\Models;

use Dcat\Admin\Traits\HasDateTimeFormatter;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
	use HasDateTimeFormatter;    
	protected $table = 'users';
	protected $guarded = [];
	public $incrementing = false;
    protected $hidden = [
        'password'
    ];
}
