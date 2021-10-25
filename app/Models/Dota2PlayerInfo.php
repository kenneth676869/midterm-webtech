<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Dota2PlayerInfo
 * @package App\Models
 * @version October 25, 2021, 11:45 am UTC
 *
 * @property string $dota2_id
 * @property string|\Carbon\Carbon $day_start_online
 * @property string|\Carbon\Carbon $day_stop_online
 * @property integer $number_of_hrs_played
 */
class Dota2PlayerInfo extends Model
{

    use HasFactory;

    public $table = 'dota2_players_per_day';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'dota2_id',
        'day_start_online',
        'day_stop_online',
        'number_of_hrs_played'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'dota2_id' => 'string',
        'day_start_online' => 'datetime',
        'day_stop_online' => 'datetime',
        'number_of_hrs_played' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'dota2_id' => 'required|string|max:255',
        'day_start_online' => 'required',
        'day_stop_online' => 'required',
        'number_of_hrs_played' => 'required|integer',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];


}
