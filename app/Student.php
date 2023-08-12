<?php
/**
 * Created by PhpStorm.
 * User: Omar_Raafat
 * Date: 11/27/2019
 * Time: 4:35 PM
 */

namespace App;


use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table = 'students';
    protected $fillable = [
        'full_name', 'phone', 'email', 'address', 'city','company_name', 'recommendation' , 'user'
    ];
}