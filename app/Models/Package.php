<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Package extends Model
{
    protected $connection = 'mongodb';
	protected $collection = 'package';

    use HasFactory;

}
