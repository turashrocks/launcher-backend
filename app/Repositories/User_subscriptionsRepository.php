<?php

namespace App\Repositories;

use App\Models\User_subscriptions;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class User_subscriptionsRepository
 * @package App\Repositories
 * @version March 12, 2019, 4:17 am UTC
 *
 * @method User_subscriptions findWithoutFail($id, $columns = ['*'])
 * @method User_subscriptions find($id, $columns = ['*'])
 * @method User_subscriptions first($columns = ['*'])
*/
class User_subscriptionsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'expire_date',
        'pcs_assigned',
        'status'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return User_subscriptions::class;
    }
}
