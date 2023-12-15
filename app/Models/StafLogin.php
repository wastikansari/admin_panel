<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticableTrait;

class StafLogin extends Eloquent implements Authenticatable
{
    use AuthenticableTrait;
    protected $guard = 'admin';
    use HasFactory;
    protected $connection = 'mongodb';
	protected $collection = 'staff_login';
    protected $primaryKey = '_id';
    protected $dates = array('createdAt', 'updatedAt');

    /**
     * The name of the "created at" column.
     *
     * @var string
     */
    const CREATED_AT = 'createdAt';

    /**
     * The name of the "updated at" column.
     *
     * @var string
     */
    const UPDATED_AT = 'updatedAt';
}
