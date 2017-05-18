<?php
/**
 * Created by PhpStorm.
 * User: PC-xiao
 * Date: 2017-5-14
 * Time: 9:31
 */

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $table = "clients";

    public static $type = [
        '1' => '公积金贷',
        '2' => '社保贷',
        '3' => '工资贷',
        '4' => '房贷贷',
        '5' => '生意贷',
    ];

    protected $fillable = [
        'username',
        'telephone',
        'total',
        'type',
        'delete',
        'is_inform',
    ];
}