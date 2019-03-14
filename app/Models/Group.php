<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

/**
 * Class Group
 * @package App\Models
 * @version March 12, 2019, 4:14 am UTC
 *
 * @property string name
 * @property string app_id
 */
class Group extends Model
{

    public $table = 'groups';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';



    public $fillable = [
        'name',
        'app_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'app_id' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];
    

    /**
     * One Group can have multiple Apps.
     */
    public function app()
    {
        return $this->hasMany('App\Models\App');
    }
    
}
