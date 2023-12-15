<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;
use Jenssegers\MongoDB\BSON\UTCDateTime;
use App\Models\Customer;
use App\Models\CustomersAddress;
use Carbon\Carbon;

class CustomersOrder extends Eloquent
{
    protected $connection = 'mongodb';
	protected $collection = 'customers_orders';
    protected $primaryKey = '_id';
    protected $dates = array('createdAt', 'updatedAt');
    use HasFactory;

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
     * Get the user that owns the CustomersOrder
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function customer()
    {
        return $this->belongsTo(Customer::class, 'customer_id', '_id');
    }

    public function pickUpAddress()
    {
        return $this->belongsTo(CustomersAddress::class, 'pickup_address_id', '_id');
    }

    public function deliveryAddress()
    {
        return $this->belongsTo(CustomersAddress::class, 'delivery_address_id', '_id');
    }
}
