<?php

namespace App\Repositories;

use App\Models\Group_App_Build;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class Group_App_BuildRepository
 * @package App\Repositories
 * @version March 12, 2019, 4:19 am UTC
 *
 * @method Group_App_Build findWithoutFail($id, $columns = ['*'])
 * @method Group_App_Build find($id, $columns = ['*'])
 * @method Group_App_Build first($columns = ['*'])
*/
class Group_App_BuildRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'app_id',
        'build_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Group_App_Build::class;
    }
}
