<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

/**
 * Class User_seats
 * @package App\Models
 * @version March 12, 2019, 4:17 am UTC
 *
 * @property string pc_uid
 * @property string pc_name
 * @property date installation_date
 */
class User_seats extends Model
{

    public $table = 'user-seats';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';



    public $fillable = [
        'pc_uid',
        'pc_name',
        'installation_date'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'pc_uid' => 'string',
        'pc_name' => 'string',
        'installation_date' => 'date'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
