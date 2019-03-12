<?php

namespace App\Repositories;

use App\Models\App;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class AppRepository
 * @package App\Repositories
 * @version March 12, 2019, 4:18 am UTC
 *
 * @method App findWithoutFail($id, $columns = ['*'])
 * @method App find($id, $columns = ['*'])
 * @method App first($columns = ['*'])
*/
class AppRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'description'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return App::class;
    }
}
