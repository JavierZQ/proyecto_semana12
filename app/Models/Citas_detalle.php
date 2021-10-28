<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Citas_detalle
 * @package App\Models
 * @version October 28, 2021, 12:35 am UTC
 *
 * @property string $idcitas
 */
class Citas_detalle extends Model
{
    //use SoftDeletes;

    public $table = 'citas_detalle';
    protected $primaryKey= 'idcitas_detalle';
    public $timestamps =false;
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'idcitas'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'idcitas_detalle' => 'integer',
        'idcitas' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'idcitas' => 'nullable|string|max:45'
    ];

    
}
