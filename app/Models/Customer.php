<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;
use App\Models\CustomersOrder;
use App\Models\CustomerSubscription;
use App\Models\CustomersAddress;

use Laravel\Sanctum\HasApiTokens;
use Tymon\JWTAuth\Contracts\JWTSubject;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Customer extends Eloquent implements JWTSubject
{
    use HasFactory, HasApiTokens;
    protected $connection = 'mongodb';
	protected $collection = 'customers_login';
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

    /**
     * Get the customerorder associated with the Customer
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function customerorder()
    {
        return $this->hasOne(CustomersOrder::class, 'customer_id', '_id');
    }

    /**
     * Get the customerSubscription associated with the Customer
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function customerSubscription()
    {
        return $this->hasOne(CustomerSubscription::class, 'customer_id', '_id');
    }

    /**
     * Get the customerAddress associated with the Customer
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function customerAddress(): HasOne
    {
        return $this->hasOne(CustomersAddress::class, 'customer_id', '_id');
    }

    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    public function getJWTCustomClaims()
    {
        return [];
    }

}
