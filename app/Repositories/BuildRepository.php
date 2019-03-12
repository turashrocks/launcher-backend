<?php

namespace App\Repositories;

use App\Models\Build;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class BuildRepository
 * @package App\Repositories
 * @version March 12, 2019, 4:18 am UTC
 *
 * @method Build findWithoutFail($id, $columns = ['*'])
 * @method Build find($id, $columns = ['*'])
 * @method Build first($columns = ['*'])
*/
class BuildRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'config_file'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Build::class;
    }
}
