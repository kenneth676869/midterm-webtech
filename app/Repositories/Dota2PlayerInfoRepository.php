<?php

namespace App\Repositories;

use App\Models\Dota2PlayerInfo;
use App\Repositories\BaseRepository;

/**
 * Class Dota2PlayerInfoRepository
 * @package App\Repositories
 * @version October 25, 2021, 11:45 am UTC
*/

class Dota2PlayerInfoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'dota2_id',
        'day_start_online',
        'day_stop_online',
        'number_of_hrs_played'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Dota2PlayerInfo::class;
    }
}
