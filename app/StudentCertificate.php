<?php
/**
 * Created by PhpStorm.
 * User: Omar_Raafat
 * Date: 12/2/2019
 * Time: 1:46 PM
 */

namespace App;


use Illuminate\Database\Eloquent\Model;

class StudentCertificate extends Model
{

    protected $table = 'student_certificates';
    protected $fillable = [
        'name', 'certificate'
    ];
    public function getCertificateAttribute($certificate){
        return asset($certificate);
    }

    public function student(){
        return $this->belongsTo('App\Student' , 'student_id');
    }

}