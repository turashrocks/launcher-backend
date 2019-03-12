<?php

namespace App\Repositories;

use App\Models\User_seats;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class User_seatsRepository
 * @package App\Repositories
 * @version March 12, 2019, 4:17 am UTC
 *
 * @method User_seats findWithoutFail($id, $columns = ['*'])
 * @method User_seats find($id, $columns = ['*'])
 * @method User_seats first($columns = ['*'])
*/
class User_seatsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'pc_uid',
        'pc_name',
        'installation_date'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return User_seats::class;
    }
}
