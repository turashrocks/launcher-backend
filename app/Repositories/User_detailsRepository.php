<?php

namespace App\Repositories;

use App\Models\User_details;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class User_detailsRepository
 * @package App\Repositories
 * @version March 12, 2019, 4:16 am UTC
 *
 * @method User_details findWithoutFail($id, $columns = ['*'])
 * @method User_details find($id, $columns = ['*'])
 * @method User_details first($columns = ['*'])
*/
class User_detailsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'address',
        'contact_number'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return User_details::class;
    }
}
