<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
/**
   @property varchar $location location
@property varchar $category category
@property varchar $phone_number phone number
@property varchar $address address
@property varchar $city city
@property varchar $state state
@property varchar $country country
@property varchar $postal_code postal code
@property timestamp $created_at created at
@property timestamp $updated_at updated at
   
 */
class Organization extends Model 
{
    
    /**
    * Database table name
    */
    protected $table = 'organizations';

    /**
    * Mass assignable columns
    */
    protected $fillable=['location',
'category',
'phone_number',
'address',
'city',
'state',
'country',
'postal_code'];

    /**
    * Date time columns.
    */
    protected $dates=[];




}