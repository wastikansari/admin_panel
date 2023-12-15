<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;
use Jenssegers\MongoDB\BSON\UTCDateTime;
use App\Models\Customer;
use App\Models\Package;

// class CustomerSubscription extends Model
class CustomerSubscription extends Eloquent
{
    use HasFactory;

    protected $connection = 'mongodb';
	protected $collection = 'customer_subscription';
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

    public function customer()
    {
        return $this->belongsTo(Customer::class, 'customer_id', '_id');
    }

    /**
     * Get the package that owns the CustomerSubscription
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function package()
    {
        return $this->belongsTo(Package::class, 'package_id', '_id');
    }
}
