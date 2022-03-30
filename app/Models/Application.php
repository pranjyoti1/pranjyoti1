<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
}
