<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

/**
 * Class Group_App_Build
 * @package App\Models
 * @version March 12, 2019, 4:19 am UTC
 *
 * @property string name
 * @property string app_id
 * @property string build_id
 */
class Group_App_Build extends Model
{

    public $table = 'groups-apps-builds';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';



    public $fillable = [
        'name',
        'app_id',
        'build_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'app_id' => 'string',
        'build_id' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
