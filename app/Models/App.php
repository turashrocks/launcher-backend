<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

/**
 * Class App
 * @package App\Models
 * @version March 12, 2019, 4:18 am UTC
 *
 * @property string name
 * @property string description
 */
class App extends Model
{

    public $table = 'apps';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';



    public $fillable = [
        'name',
        'description'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'description' => 'string',
        'build_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    /**
     * One App can have multiple Builds.
     */
    public function build()
    {
        return $this->hasMany('App\Models\Build');
    }

    /**
     * One App belongs to only on Groups.
     */

    public function group()
    {
        return $this->belongsTo('App\Models\Group');
    }

    
}
