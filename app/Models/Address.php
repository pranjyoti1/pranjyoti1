<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;
    protected $fillable=[
       
       'ApplicationFormID',
       'Address1',
       'District',
       'AddressType',
       'AddressSubType',
       'TerritoryType',
       'Pincode',
    
    ];
}
