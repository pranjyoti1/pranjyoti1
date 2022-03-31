<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Address;

class Application extends Model
{
    use HasFactory;
    protected $fillable = [
       'ApplicationFormID',
           'FirstName',
           'DOB',
           'GuardianName',
           'MobileNo',
           'Gender',
           'EmploymentStatus',
           'PrimaryLanguage',     
           'HighestEducation',
           'MaritalStatus',
           'ReligionID',
           'CasteCode',
           'UIDType',
           'UIDNumber'
        
        
    ];

    public function addresses()
{
   return $this->hasMany(Address::class,'ApplicationFormID');
}

}
