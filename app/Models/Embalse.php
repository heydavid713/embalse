<?php
/**
 * Created by PhpStorm.
 * User: davidsoto
 * Date: 1/17/16
 * Time: 1:59 PM
 */

namespace app\Models;


use Illuminate\Database\Eloquent\Model;

class Embalse extends Model
{
    protected $table = 'embalse';
    public $timestamps = false;
    public $incrementing = false;

    protected $fillable = [
        'nombre','siteID','latitude','longitude','desborde','seguridad','observacion','ajuste','control','capacidad'

    ];
}