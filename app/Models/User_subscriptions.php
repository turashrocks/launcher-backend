<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

/**
 * Class User_subscriptions
 * @package App\Models
 * @version March 12, 2019, 4:17 am UTC
 *
 * @property date expire_date
 * @property integer pcs_assigned
 * @property boolean status
 */
class User_subscriptions extends Model
{

    public $table = 'user-subscriptions';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';



    public $fillable = [
        'expire_date',
        'pcs_assigned',
        'status'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'expire_date' => 'date',
        'pcs_assigned' => 'integer',
        'status' => 'boolean'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
